<?php
// this value would normally br provided by a login form
$string = 'myPassword';

$salt = "peter";
$pepper = "MacIntyre";

echo "Here is the original sha1 encryption: " . sha1($string);
echo "<br>";
$salt = sha1($salt);
$pepper = sha1($pepper);

$string = $salt . $string . $pepper;
echo "Here is the prepared string about to be further encrypted: " . $string;
echo "<br>";
echo "Here is the well seasoned encryption: " . sha1($string);

?>
