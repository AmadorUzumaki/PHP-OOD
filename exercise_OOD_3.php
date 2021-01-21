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
public function setEuro($euro)
{
$this->euro=$euro;
}


public function setExchange($exchange){
$this->exchange=$exchange;
}

public function setPound($pound){
$this->pound=$pound;
}

// getters

public function getEuro(){
return $this->euro;
}
public function getExchange(){
return $this->exchange;
}
public function getPound(){
return $this->pound;
}

public function print()
{
  echo 'Euro: ', $this->getEuro();
  echo '<br>';
  echo 'Exchange Rate: ', $this->getExchange();
  echo '<br>';
  echo 'Pound: ', $this->getPound();
  echo '<br>';
}

function __construct($euro, $exchange, $pound){
$this->euro=$euro;
$this->exchange=$exchange;
$this->pound=$pound;
}
}

$currency1=new CurrencyConverter(45, 12, 50);
$currency1->print();
?>
</body>
</HTML>
