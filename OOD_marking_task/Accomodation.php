<?php
define('MENJADOR', array('casa','a la carta','buffet','no'));
class Accomodation
{
  public $numHabit;
  private $menjador;

  protected function setNumHabit($numHabit){
    $this->numHabit=$numHabit;
  }

  protected function setMenjador($menjador){
    $this->menjador=$menjador;
  }
  protected function getNumHabit(){
    return $this->numHabit;
  }
  protected function getMenjador(){
    return $this->menjador;
  }
  public function checkIn(){
    $this->numHabit=--$numHabit;
  }
  public function checkOut(){
    $this->numHabit=++$numHabit;
  }
  public function __construct($numHabit,$menjador){
    $this->setNumHabit($numHabit);
    $this->setMenjador($menjador);
  }
}
?>
