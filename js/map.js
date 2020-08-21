var map;
var marker;
var circle;
var geocoder;

function load() {
    geocoder = new google.maps.Geocoder();

    if ($("#field-lat").val() != '' && $("#field-lon").val() != '')
        var latlng = new google.maps.LatLng($("#field-lat").val(), $("#field-lon").val());
    else
        var latlng = new google.maps.LatLng(19.2556, -103.68817090988159);
    var myOptions = {
        zoom: 12,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };
    map = new google.maps.Map(document.getElementById("retailer-map"), myOptions);

    addMarker(map.getCenter());

    google.maps.event.addListener(map, "click", function(event) {
        addMarker(event.latLng);
    });

}

function codeAddress() {
   
    var address = document.getElementById("field-localiza").value;
   
    
    console.log("finding coordinates for - " + address);
    //console.log("Zip finding for " + zip);
    geocoder.geocode({
        'address': address
    }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            addMarker(results[0].geometry.location);
        } else {
            console.log("Geocode was not successful for the following reason: " + status);
            //alert("Geocode was not successful for the following reason: " + status);
        }
    });
}

function addMarker(location) {
    if (marker) {
        marker.setMap(null);
    }
    document.getElementById("field-lat").value = location.lat();
    document.getElementById("field-lon").value = location.lng();
    console.log("Coordinates found / Latitude - " + location.lat() + " & longitude - " + location.lng());
    marker = new google.maps.Marker({
        position: location,
        draggable: true
    });
    marker.setMap(map);
    google.maps.event.addListener(marker, "dragend", function(event) {
        newlatlng = event.latLng;
        map.setCenter(newlatlng);
        document.getElementById("field-lat").value = newlatlng.lat();
        document.getElementById("field-lon").value = newlatlng.lng();
    });
}

window.onload = function() {
    load();
    $('#field-localiza').blur(function() {
       codeAddress();
    });
    $('#field-localiza').css('text-transform', 'uppercase');
}