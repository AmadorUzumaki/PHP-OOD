<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php
require "Accomodation.php";
require "RuralAcc.php";
require "BusinessAcc.php";

$acc1=new RuralAcc(10, MENJADOR[0],true,RuralAcc::INST_AIRE_LLUIRE[2]);
$acc2=new BusinessAcc(1,MENJADOR[1]);
$acc2->checkIn();
try {
  $acc2->checkIn();
}
catch (Exception $e) {
    echo "Exception message is: " . $e->getMessage() . "<br>";
}
 ?>
</body>
</html>
