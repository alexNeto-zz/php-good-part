<?php

function show_stuff(){
	  $secondName = "Beck";
	  echo "inside show_stuff: " . $firstname . " " . $secondName;
}

$firstname = "Peter";

echo $firstname . "<br/>";
show_stuff();

echo "Outside function " . $secondName;

?>	
