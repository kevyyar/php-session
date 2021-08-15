<?php
// indexed arrays
$cars = ['honda', 'bmw', 'tesla', 'mercedez benz'];
$names = array('bryan', 'kevin', 'kathy', 'ryu');
echo $cars[2];
echo "<br />";
echo $names[3];
echo "<br />";
print_r($cars);
echo "<br />";
array_push($cars, 'ford');
print_r($cars);
echo "<br />";

$mergedArrays = array_merge($cars, $names);
print_r($mergedArrays);
echo "<br />";


// associative arrays (key & value pairs)
$characters = ['kev' => 'white', 'luigi' => 'black', 'wario' => 'blue'];
print_r($characters);
echo "<br />";
$computers = array('Linux' => 'Arch', 'Macbook' => 'MacOS', 'Windows' => 'Windows 10');
print_r($computers);
$computers['Google'] = 'GoogleOS';
echo "<br />";
print_r($computers);
echo "<br />";
echo 'The length of the Characters Array is '.count($characters).' and the length of the Computers Array is '.count($computers);
