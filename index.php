<?php

use learnPhp\Teachers;
use learnPhp\Students as stud;
include 'teachers.php';
include 'students.php';


$objOfTeacher = new Teachers\Users();
$objOfTeacher->createUser('Axl');

echo "Techers -- ";
print_r($objOfTeacher->getTeachers());

$objOfStud = new stud\Users();
$objOfStud->createUser('Slash');

echo "<br> Students -- ";
print_r($objOfStud->getStudents());


