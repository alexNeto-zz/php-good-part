<?php

$string = " The quick brown fox jumps over the lazy dog";
echo "word count: " . str_word_count($string);
echo "<br/>";
echo "String length: " . strlen($string);
echo "<br/>";
echo "String length trimmed: " . strlen(trim($string));

$needle = "BROWN fox";

echo "<br/>strstr: ";
var_dump(strstr($string, $needle));
echo "<br/>stristr: ";
var_dump(stristr($string, $needle));
echo "<br/>";
$needle = "the";
echo "strstr: ";
var_dump(strstr($string, $needle));
echo "<br/>";
echo "stristr: ";
var_dump(stristr($string, $needle));
echo "<br/>";
$position = strpos($string, "fox");
echo "position of 'fox' $position <br/>";
$result = substr($string, strpos($string, "fox"), 8);
echo "8 characters after finding the position of 'fox': $result <br/>";
$new_string = str_replace("the", "black", $string);
echo $new_string;

?>
