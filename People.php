<?php

class People
{
	private $height;
	private $weight;
	private $age;
	private $sex;
	
	function __construct() {
		
	}
	
	function getAge() {
		if ($this->sex === 'W') {
			return "You don't ask a lady about her age! How rude!";
		} else {
			return $this->sex;
		}
	}
	
	function speak() {
		return "Hello there i am human!";
	}
}