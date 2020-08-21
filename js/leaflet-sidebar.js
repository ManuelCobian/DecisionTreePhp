/**
 * @name Sidebarmap
 * @class L.Control.Sidebarmap
 * @extends L.Control
 * @param {string} id - The id of the sidebarmap element (without the # character)
 * @param {Object} [options] - Optional options object
 * @param {string} [options.position=left] - Position of the sidebarmap: 'left' or 'right'
 * @see L.control.sidebarmap
 */
L.Control.Sidebarmap = L.Control.extend(/** @lends L.Control.Sidebarmap.prototype */ {
    includes: (L.Evented.prototype || L.Mixin.Events),

    options: {
        position: 'left'
    },

    initialize: function (id, options) {
        var i, child;

        L.setOptions(this, options);

        // Find sidebarmap HTMLElement
        this._sidebarmap = L.DomUtil.get(id);

        // Attach .sidebarmap-left/right class
        L.DomUtil.addClass(this._sidebarmap, 'sidebarmap-' + this.options.position);

        // Attach touch styling if necessary
        if (L.Browser.touch)
            L.DomUtil.addClass(this._sidebarmap, 'leaflet-touch');

        // Find sidebarmap > div.sidebarmap-content
        for (i = this._sidebarmap.children.length - 1; i >= 0; i--) {
            child = this._sidebarmap.children[i];
            if (child.tagName == 'DIV' &&
                    L.DomUtil.hasClass(child, 'sidebarmap-content'))
                this._container = child;
        }

        // Find sidebarmap ul.sidebarmap-tabs > li, sidebarmap .sidebarmap-tabs > ul > li
        this._tabitems = this._sidebarmap.querySelectorAll('ul.sidebarmap-tabs > li, .sidebarmap-tabs > ul > li');
        for (i = this._tabitems.length - 1; i >= 0; i--) {
            this._tabitems[i]._sidebarmap = this;
        }

        // Find sidebarmap > div.sidebarmap-content > div.sidebarmap-pane
        this._panes = [];
        this._closeButtons = [];
        for (i = this._container.children.length - 1; i >= 0; i--) {
            child = this._container.children[i];
            if (child.tagName == 'DIV' &&
                L.DomUtil.hasClass(child, 'sidebarmap-pane')) {
                this._panes.push(child);

                var closeButtons = child.querySelectorAll('.sidebarmap-close');
                for (var j = 0, len = closeButtons.length; j < len; j++)
                    this._closeButtons.push(closeButtons[j]);
            }
        }
    },

    /**
     * Add this sidebarmap to the specified map.
     *
     * @param {L.Map} map
     * @returns {Sidebarmap}
     */
    addTo: function (map) {
        var i, child;

        this._map = map;

        for (i = this._tabitems.length - 1; i >= 0; i--) {
            child = this._tabitems[i];
            var sub = child.querySelector('a');
            if (sub.hasAttribute('href') && sub.getAttribute('href').slice(0,1) == '#') {
                L.DomEvent
                    .on(sub, 'click', L.DomEvent.preventDefault )
                    .on(sub, 'click', this._onClick, child);
            }
        }

        for (i = this._closeButtons.length - 1; i >= 0; i--) {
            child = this._closeButtons[i];
            L.DomEvent.on(child, 'click', this._onCloseClick, this);
        }

        return this;
    },

    /**
     * @deprecated - Please use remove() instead of removeFrom(), as of Leaflet 0.8-dev, the removeFrom() has been replaced with remove()
     * Removes this sidebarmap from the map.
     * @param {L.Map} map
     * @returns {Sidebarmap}
     */
     removeFrom: function(map) {
         console.log('removeFrom() has been deprecated, please use remove() instead as support for this function will be ending soon.');
         this.remove(map);
     },

    /**
     * Remove this sidebarmap from the map.
     *
     * @param {L.Map} map
     * @returns {Sidebarmap}
     */
    remove: function (map) {
        var i, child;

        this._map = null;

        for (i = this._tabitems.length - 1; i >= 0; i--) {
            child = this._tabitems[i];
            L.DomEvent.off(child.querySelector('a'), 'click', this._onClick);
        }

        for (i = this._closeButtons.length - 1; i >= 0; i--) {
            child = this._closeButtons[i];
            L.DomEvent.off(child, 'click', this._onCloseClick, this);
        }

        return this;
    },

    /**
     * Open sidebarmap (if necessary) and show the specified tab.
     *
     * @param {string} id - The id of the tab to show (without the # character)
     */
    open: function(id) {
        var i, child;

        // hide old active contents and show new content
        for (i = this._panes.length - 1; i >= 0; i--) {
            child = this._panes[i];
            if (child.id == id)
                L.DomUtil.addClass(child, 'active');
            else if (L.DomUtil.hasClass(child, 'active'))
                L.DomUtil.removeClass(child, 'active');
        }

        // remove old active highlights and set new highlight
        for (i = this._tabitems.length - 1; i >= 0; i--) {
            child = this._tabitems[i];
            if (child.querySelector('a').hash == '#' + id)
                L.DomUtil.addClass(child, 'active');
            else if (L.DomUtil.hasClass(child, 'active'))
                L.DomUtil.removeClass(child, 'active');
        }

        this.fire('content', { id: id });

        // open sidebarmap (if necessary)
        if (L.DomUtil.hasClass(this._sidebarmap, 'collapsed')) {
            this.fire('opening');
            L.DomUtil.removeClass(this._sidebarmap, 'collapsed');
        }

        return this;
    },

    /**
     * Close the sidebarmap (if necessary).
     */
    close: function() {
        // remove old active highlights
        for (var i = this._tabitems.length - 1; i >= 0; i--) {
            var child = this._tabitems[i];
            if (L.DomUtil.hasClass(child, 'active'))
                L.DomUtil.removeClass(child, 'active');
        }

        // close sidebarmap
        if (!L.DomUtil.hasClass(this._sidebarmap, 'collapsed')) {
            this.fire('closing');
            L.DomUtil.addClass(this._sidebarmap, 'collapsed');
        }

        return this;
    },

    /**
     * @private
     */
    _onClick: function() {
        if (L.DomUtil.hasClass(this, 'active'))
            this._sidebarmap.close();
        else if (!L.DomUtil.hasClass(this, 'disabled'))
            this._sidebarmap.open(this.querySelector('a').hash.slice(1));
    },

    /**
     * @private
     */
    _onCloseClick: function () {
        this.close();
    }
});

/**
 * Creates a new sidebarmap.
 *
 * @example
 * var sidebarmap = L.control.sidebarmap('sidebarmap').addTo(map);
 *
 * @param {string} id - The id of the sidebarmap element (without the # character)
 * @param {Object} [options] - Optional options object
 * @param {string} [options.position=left] - Position of the sidebarmap: 'left' or 'right'
 * @returns {Sidebarmap} A new sidebarmap instance
 */
L.control.sidebarmap = function (id, options) {
    return new L.Control.Sidebarmap(id, options);
};
