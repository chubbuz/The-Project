<?php
namespace App\Classes;


class AdvSingle{

	public $image;
	public $location;

	function __construct ($image, $location){
		$this->image = $image;
		$this->location=$location;
	}

}