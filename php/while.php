<?php

$array1 = array('a', 'b', 'c');

$i = 0;
while ($i < count($array1))
{
  echo $i .' => '. $array1[$i] . PHP_EOL;
  $i++;
}

echo "----" . PHP_EOL;


$i = 0;
do
{
  echo $i .' => '. $array1[$i] . PHP_EOL;
  $i++;
}
while ($i < count($array1));

echo "----" . PHP_EOL;


// while, break
$i = 0;
while ($i < count($array1))
{
  if ($i == 1) break;
  echo $i .' => '. $array1[$i] . PHP_EOL;
  $i++;
}

echo "----" . PHP_EOL;


?>
