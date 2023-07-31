<?php
 
namespace learnPhp\Students;

class Users{

	private $students;

	public function createUser($name){
		$this->students[] = $name;
	}

	public function getStudents(){

		return $this->students;
	}
}
