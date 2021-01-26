<HTML>
<head>
<title>Currency Converter with OOD</title>
</head>
<body>

<?php
class CurrencyConverter
{
var $euro;
var $exchange;
var $pound;

// setters

public function setExchange($exchange){
$this->exchange=$exchange;
}

public function setPound($pound){
$this->pound=$pound;
}

// getters

public function getExchange(){
return $this->exchange;
}
public function getPound(){
return $this->pound;
}

public function print()
{
  echo 'Euro: ', $this->euro;
  echo '<br>';
  echo 'Exchange Rate: ', $this->getExchange();
  echo '<br>';
  echo 'Pound: ', $this->getPound();
  echo '<br>';
}

public function ConvertEurosToPounds(){
  $this->euro=$this->pound/$this->exchange;
  return $this->euro;
}

function __construct( $exchange, $pound){
$this->exchange=$exchange;
$this->pound=$pound;

}
}

$currency1=new CurrencyConverter(3, 50);
if($currency1->exchange>0)
  $currency1->ConvertEurosToPounds();
else {
  echo "The exchange rate has to be greater than 0 <br>";
}
$currency1->print();

?>
</body>
</HTML>
