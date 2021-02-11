<?php
define('TIPUS_ACTIVITATS', array('senderisme','equitació','ciclisme'));
class RuralAcc extends Accomodation {
  const INST_AIRE_LLUIRE = array('jardi', 'muntanya','platja');
  private $orgActivitats;
  private $instAireLliure;
  protected function setOrgActivitats($orgActivitats){
      $this->orgActivitats=$orgActivitats;
  }
  protected function setInstAireLliure($instAireLliure){
      $this->instAireLliure=$instAireLliure;
  }
  protected function getOrgActivitats(){
        return $this->orgActivitats;
  }
  protected function getInstAireLliure(){
        return $this->instAireLliure;
  }

  public function __construct($numHabit, $menjador, $orgActivitats, $instAireLliure){
    parent::__construct($numHabit, $menjador);
    $this->orgActivitats=$orgActivitats;
    $this->instAireLliure=$instAireLliure;
  }
}
?>
