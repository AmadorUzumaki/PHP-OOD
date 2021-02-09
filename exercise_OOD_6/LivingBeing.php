<?php
define('SPEAKING_CAPABILITY', array('guau', 'miau', 'language'));
define('EATING_CAPABILITY', array('meat', 'vegs', 'meat and vegs'));
define('MOVING_CAPABILITY', array('walk', 'fly'));
class LivingBeing
{
  const GENDER = array('female', 'male');
  const STATUS = array('awake', 'asleep');
  public $age;
  private $status;
  private $gender;
  private $eatingCapability;
  private $movingCapability;
  private $speakingCapability;

  protected function setAge($age){
    $this->age=$age;
  }

  protected function setStatus($status){
    $this->status=$status;
  }
  protected function setGender($gender){
    $this->gender=$gender;
  }
  protected function setEatingCapability($eatingCapability){
    $this->eatingCapability=$eatingCapability;
  }
  protected function setMovingCapability($movingCapability){
    $this->movingCapability=$movingCapability;
  }
  protected function setSpeakingCapability($speakingCapability){
    $this->speakingCapability=$speakingCapability;
  }
  protected function getAge(){
    return $this->age;
  }
  protected function getStatus(){
    return $this->status;
  }
  protected function getGender(){
    return $this->gender;
  }
  protected function getEatingCapability(){
    return $this->eatingCapability;
  }
  protected function getMovingCapability(){
    return $this->movingCapability;
  }
  protected function getSpeakingCapability(){
    return $this->speakingCapability;
  }
  public function oneYearOlder(){
    $this->age=++$age;
  }
}
?>
