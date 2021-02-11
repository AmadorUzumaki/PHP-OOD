<?php
class BusinessAcc extends Accomodation {
  const SALES = array('reunions', 'audio visuals','internet','no');
  private $sales;
  protected function setSales($sales){
      $this->sales=$sales;
  }
  protected function getSales(){
        return $this->sales;
  }
  public function checkIn(){
    if (parent::getNumHabit() == 0)
        throw new Exception('check-in Error: Hotel complet. Operació no permesa<br>');
    else
      parent::$numHabit=--$numHabit;
      echo "check-in successful<br>";
  }
}
?>
