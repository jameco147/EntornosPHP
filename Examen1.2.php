<?php

$consumo=85;
$desc1=(10*$consumo)/100; 
$desc2=(20*$consumo)/100;
$cuenta=0;
$iva=0;
$total=0;


if ($consumo<100) {
  $cuenta= $consumo-$desc1;
  $iva= ($cuenta*19)/100;
  $total= $cuenta + $iva;
  echo("El descuento es de ".$desc1. " euros, más un impuesto de ". $iva." euros. El total es de ".$total." euros.");
}
else {
  $cuenta= $consumo-$desc2;
  $iva= ($cuenta*19)/100;
  $total= $cuenta + $iva;
  echo("El descuento es de ".$desc2. " euros, más un impuesto de ". $iva." euros. El total es de ".$total." euros.");

}
?>
