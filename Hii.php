<?php

function generateHexKeys($startKey, $endKey) {
  $startInt = hexdec($startKey);
  $endInt = hexdec($endKey);

  for ($i=$startInt; $i<=$endInt; $i++) {
    $hexKey = dechex($i);
    echo $hexKey . "\n";
  }
}

$startKey = "000000";
$endKey = "ffffff";

generateHexKeys($startKey, $endKey);

?>
