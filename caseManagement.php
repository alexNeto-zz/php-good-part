<?php

$string = "The quick brown fox jumps over the lazy dog";
var_dump(ucwords($string));
echo "<br/>";
var_dump(strtoupper($string));
echo "<br/>";
var_dump(strtolower($string));
echo "<br/>";
$string = "smith";
var_dump(ucfirst($string));
echo "<br/>";
$string = "SMITH";
var_dump(lcfirst($string));
?>
