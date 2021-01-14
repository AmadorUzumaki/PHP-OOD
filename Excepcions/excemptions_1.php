<?php
//Sense excepcions.
/*function discountCalculation($discount,$percentage,$price){
  if ($percentage!=0){
  $discountCalculation=($price*$discount)/$percentage;
    return $price-$discountCalculation;
  }
  return "Value has to be greater than 0";
}
echo discountCalculation(10,0,50);*/
//Amb excepcions.
function discountCalculation($discount,$percentage,$price){
  if ($percentage==0){
    throw new Exception('Divisió per zero.');
  }
  else {
  $discountCalculation=($price*$discount)/$percentage;
  }
  return $price-$discountCalculation;
}
  try {
    $discount=10;
    $percentage=25;
    $price=50;
      echo discountCalculation($discount,$percentage,$price);
  }
  catch (Exception $e) {
      echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
  }
?>
