<?php 

function volume_dua_kubus ($a, $b){
  $volumea = $a * $a * $a;
  $volumeb = $b * $b * $b;

  $total = $volumea + $volumeb;

  return $total;
}

print volume_dua_kubus(9, 4);

?>