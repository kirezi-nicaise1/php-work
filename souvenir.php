<?php
echo "*****\n";
echo "   *\n";
echo "  *\n";
echo " *\n";
echo "*****\n";

$color = array(4 => 'White', 6 => 'green', 11 => 'red');
// Get the first element of the array
$first_element = reset($color);
// Insert "Black" as the new first element of the array
array_unshift($color, 'Black');
// Output the modified array
print_r($color);
var_dump($colors);
?>