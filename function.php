<?php

function myList($first, $second, $third){
  echo "here is first: " . $first . "<br/> ";
  echo "here is second: " . $second . "<br/>";
  echo "and here is third: " . $third . "<br/>";
}

function addThese($first, $second, $third){
  $answer = $first + $second + $third;
  return $answer;
}

myList("Peter", "Chris", "Dean");
echo "<br/><br/>";

$first = 5;
$second = 34;
$third = 237;
$math = addThese($first, $second, $third);
echo "$first, $second, and $third add up to: " . $math;

?>
