<?php
class Person
{
public $name;
public $dni;

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print()
{
  echo $this->name.'<br>';
  echo $this->dni.'<br><br>';
}
}
?>
