<?php
 
namespace learnPhp\Teachers;

class Users{

	private $teachers;

	public function createUser($name){
		$this->teachers[] = $name;
	}

	public function getTeachers(){

		return $this->teachers;
	}
}

