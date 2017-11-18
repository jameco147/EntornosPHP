<?php

$Dado1=6;
$Dado2=1;
$Dado3=1;


$CntSeises=0;

if($Dado1==6){
  $CntSeises++;
}
if($Dado2==6){
  $CntSeises++;
}
if($Dado3==6){
  $CntSeises++;
}


if ($CntSeises=3) {
  print("ORO");
}
elseif ($CntSeises=2) {
  print("PLATA");
}
elseif ($CntSeises=1) {
  print("BRONCE");
}
else {
  print("HAS PERDIDO");
}


?>
