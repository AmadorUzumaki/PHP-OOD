<?php
class PersonOOD6 extends LivingBeing
{
private $fullName;
public function setFullName($fullName)
{
$this->fullName=$fullName;
}

function getFullName(){
  return $this->fullName;
}

function __construct($fullName, $age){
  $this->fullName=$fullName;
  parent::setAge($age);
  parent::setStatus(parent::STATUS[0]);
  parent::setGender(parent::GENDER[1]);
  parent::setEatingCapability(EATING_CAPABILITY[2]);
  parent::setMovingCapability(MOVING_CAPABILITY[0]);
  parent::setSpeakingCapability(SPEAKING_CAPABILITY[2]);
}
public function print(){
  echo "I'm ". $this->getFullName().'<br>';
  echo "I'm ". parent::getAge()." and".'<br>';
  echo "I can talk a ".parent::getSpeakingCapability().'<br>';
  echo "eat ".parent::getEatingCapability().'<br>';
  echo "and ".parent::getMovingCapability().'<br>';
  echo "My status is ".parent::getStatus().'<br>';
  echo "My gender is ".parent::getGender().'<br>';
}
}
?>
