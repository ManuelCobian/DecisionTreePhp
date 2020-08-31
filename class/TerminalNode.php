<?php
/*
 * This file is part of the Devtronic Tree Classifier package.
 *
 * (c) Julian Finkler <admin@developer-heaven.de>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */
require_once('Node.php');


class TerminalNode extends Node
{
    public function &getResult()
    {  
        return $this->subjects;
    }

    public function classify()
    {
        return null;
    }
}
