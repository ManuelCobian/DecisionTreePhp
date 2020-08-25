<?php

class Tree {
	protected	$root;
	private		$currentNode;
	
	public function __construct($root) {
		$this->root = $root;
	}
	
	public function display() {
		$this->root->display(0);
	}
}


?>