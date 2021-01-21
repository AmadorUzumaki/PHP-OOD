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
return $this->DNI;
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
echo 'Name: ', $this->getName();
echo '<br>';
echo 'DNI: ', $this->getDNI();
echo '<br>';
echo 'Surname 1: ', $this->getSurname1();
echo '<br>';
echo 'Surname 2: ', $this->getSurname2();
echo '<br>';
echo 'Age: ', $this->getAge();
echo '<br>';
}

function __construct($name,$DNI, $surname1, $surname2, $age){
$this->name=$name;
$this->DNI=$DNI;
$this->surname1=$surname1;
$this->surname2=$surname2;
$this->age=$age;
}

}

$alumne1=new Student('Imena', '23344556D', 'García', 'Jiménez', 18 );
$alumne1->print();
?>
</body>
</HTML>
