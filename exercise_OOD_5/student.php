<?php
class Student extends Person
{
private $studyField;

public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

function getStudyField(){
  return $this->studyField;
}

function __construct($name, $dni, $studyField){
  parent::__construct($name,$dni);
  $this->studyField=$studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo $this->getStudyField().'<br>';
}
}
?>
