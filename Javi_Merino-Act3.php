<?php

define("num1", 100);
define("num2", 90);
define("num3", 80);
define("num4", 70);
$nota= 50;



if ($nota >= num1) {
  print("Sistemas, Electrónica,Industrial, Administración");
}
elseif($nota >= num2) {
  print("Electrónica,Industrial, Administración");
}

elseif($nota >= num3) {
  print("Industrial, Administración");
}

elseif($nota >= num4) {
  print("Administración");
}

else {
  print("No puedes acceder a nada");
}



?>
