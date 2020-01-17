<?php
$sum = 0;
for ($a = 0; $a <= 100000; $a++){
  $sum = $sum + $a;
  if($a == 100000){
    echo $sum;
  }
}
?>