<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName){
  $this->FCTBusinessName=$FCTBusinessName;
}

function getFCTBusinessName(){
  return $this->FCTBusinessName;
}

function __construct($name, $dni, $studyField, $FCTBusinessName){
  parent::__construct($name,$dni,$studyField);
  $this->FCTBusinessName=$FCTBusinessName;
}

public function print()
{
  parent::print();
  echo $this->getFCTBusinessName().'<br>';
}
}
?>
