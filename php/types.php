<?php

$true = true;
$false = false;
$string = "string";
$char = 'a';
$null = NULL;
$array = array();
$integer = 123;
$float = 12.34;
$double = 12.34E16; // 12.34 x 10^16

class Hospital {
  private $name;
  function __construct($name)
  {
    $this->name = $name;
  }
  function getName()
  {
    return $this->name;
  }
}

$object = new Hospital('Awesome Health');

echo 'true is '. gettype($true) . PHP_EOL;
echo 'false is '. gettype($false) . PHP_EOL;
echo 'string is '. gettype($string) . PHP_EOL;
echo 'char is '. gettype($char) . PHP_EOL;
echo 'NULL is '. gettype($null) . PHP_EOL;
echo 'array is '. gettype($array) . PHP_EOL;
echo 'integer is '. gettype($integer) . PHP_EOL;
echo 'float is '. gettype($float) . PHP_EOL;
echo 'double is '. gettype($double) . PHP_EOL;
echo 'object is '. gettype($object) . PHP_EOL;

echo "----" . PHP_EOL;

if (is_bool($true)) echo 'true is bool' . PHP_EOL;
if (is_bool($false)) echo 'false is bool' . PHP_EOL;
if (is_string($string)) echo 'string is string' . PHP_EOL;
if (is_string($char)) echo 'char is string' . PHP_EOL;
if (is_null($null)) echo 'null is null' . PHP_EOL;
if (is_array($array)) echo 'array is array' . PHP_EOL;
if (is_int($integer)) echo 'integer is int' . PHP_EOL;
if (is_float($float)) echo 'float is float' . PHP_EOL;
if (is_double($double)) echo 'double is double' . PHP_EOL;

echo "----" . PHP_EOL;

?>
