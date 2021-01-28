<?php
class Teacher extends Person
{
public $salary;
public function setSalary($salary)
{
$this->salary=$salary;
}

function getSalary(){
  return $this->salary;
}

function __construct($name, $dni, $salary){
  parent::__construct($name,$dni);
  $this->salary=$salary;
}
public function print(){
  parent::print();
  echo $this->getSalary().'<br>';
}
}
?>
