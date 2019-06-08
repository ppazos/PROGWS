<?php

$array1 = array('a', 'b', 'c');

foreach ($array1 as $k => $v)
{
  echo $k .' => '. $v . PHP_EOL;
}

echo "----" . PHP_EOL;


for ($i=0; $i<count($array1); $i++)
{
  echo $i .' => '. $array1[$i] . PHP_EOL;
}

echo "----" . PHP_EOL;


// foreach, continue
foreach ($array1 as $k => $v)
{
  if ($k == 1) continue;
  echo $k .' => '. $v . PHP_EOL;
}

echo "----" . PHP_EOL;


// foreach, break
foreach ($array1 as $k => $v)
{
  if ($k == 1) break;
  echo $k .' => '. $v . PHP_EOL;
}

echo "----" . PHP_EOL;


$array2 = array(1000 => 'a', 2000 => 'b', 3000 => 'c');

foreach ($array2 as $k => $v)
{
  echo $k .' => '. $v . PHP_EOL;
}

echo "----" . PHP_EOL;


for ($i=0; $i<count($array2); $i++)
{
  echo $i .' => '. $array2[$i] . PHP_EOL; // ERROR!
}

echo "----" . PHP_EOL;

?>
