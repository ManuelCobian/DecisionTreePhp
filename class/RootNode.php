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

class RootNode extends Node
{
    public function __construct(array &$subjects)
    {
        $this->subjects = &$subjects;
    }

    public function classify()
    {
        foreach ($this->subNodes as &$subNode) {
            foreach ($this->subjects as &$subject) {
                $subNode->addSubject($subject);
            }
            $subNode->classify();
        }
    }
}
