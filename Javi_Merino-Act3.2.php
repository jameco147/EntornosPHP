<?php

$colegio= "Particular";
$nivel= "C";

if ($colegio == "Nacional") {
  if ($nivel == "A") {
    print ("300");
  }
  elseif ($nivel == "B") {
    print ("200");
  }
  elseif ($nivel == "C") {
    print ("100");
  }
}

if ($colegio == "Particular") {
  if ($nivel == "A") {
    print ("400");
  }
  elseif ($nivel == "B") {
    print ("300");
  }
  elseif ($nivel == "C") {
    print ("200");
  }
}


?>
