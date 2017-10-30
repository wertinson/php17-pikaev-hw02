<?php

$x = rand(0, 100);
echo "Число ".$x."<br>";

$first = 1;
$second = 1;
$third = 0;

while (True) {
  if ($first > $x) {
    echo "Задуманное число НЕ входит в числовой ряд";
    break;
  }elseif ($first == $x) {
    echo "Задуманное число входит в числовой ряд";
    break;
  }else {
    $third = $first;
    $first = $first + $second;
    $second = $third;
  }
}

?>
