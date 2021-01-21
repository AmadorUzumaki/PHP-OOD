<HTML>
<head>
<title>Primer exemple amb POO</title>
</head>
<body>

<?php
class Student
{
var $name;
var $surname1;
var $surname2;
var $age;
var $dni;

// setters
public function setName($name)
{
$this->name=$name;
}

public function setDNI($dni)
{
$this->dni=$dni;
}

public function setSurname1($surname1){
$this->surname1=$surname1;
}

public function setSurname2($surname2){
$this->surname2=$surname2;
}

public function setAge($age){
$this->age=$age;
}

// getters

public function getName(){
return $this->name;
}

public function getDNI(){
return $this->dni;
echo "<br>";
}

public function getSurname1(){
return $this->surname1;
}

public function getSurname2(){
return $this->surname2;
}

public function getAge(){
return $this->age;
}

public function print()
{
echo $this->getName();
echo '<br>';
echo $this->getDNI();
echo '<br>';
echo $this->getSurname1();
echo '<br>';
echo $this->getSurname2();
echo '<br>';
echo $this->getAge();
echo '<br>';
echo '<br>';
}

}

$alumne1=new Student();
$alumne1->setName('Imena');
$alumne1->setDNI('23344556D');
$alumne1->setSurname1('García');
$alumne1->setSurname2('Jiménez');
$alumne1->setAge(18);
$alumne1->print();
?>
</body>
</HTML>
