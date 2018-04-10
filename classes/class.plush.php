<?php

class Plush {

	private $name;
	private $id;
	private $generation;
	private $hash;
	private $parent1;
	private $parent2;
	private $owner;

	function __construct($name, $id, $generation, $hash, $parent1, $parent2, $owner) {
		$this->name = $name;
		$this->id = $id;
		$this->generation = $generation;
		$this->hash = $hash;
		$this->parent1 = $parent1;
		$this->parent2 = $parent2;
		$this->owner = $owner;
	}

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}

	function getId() {
		return $this->id;
	}

	function getGeneration() {
		return $this->generation;
	}

	function getHash() {
		return $this->hash;
	}

	function getParent1() {
		return $this->parent1;
	}

	function getParent2() {
		return $this->parent2;
	}
	
	function getOwner() {
		return $this->owner;
	}

}

?>
