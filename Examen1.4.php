<?php

$temperatura=31;

if ($temperatura < 10) {
  echo("La temperatura es fría");
}

elseif (($temperatura >= 10) && ($temperatura <= 20))  {
  echo("La temperatura es templada");
}

elseif (($temperatura >= 21) && ($temperatura <= 30))  {
  echo("Hace calor");
}

else {
  echo("El clima es tropical");
}

?>
