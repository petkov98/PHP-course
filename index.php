<?php
echo "ala bala";

$username = "Momchil";
echo "<br>";
echo "<br>";
echo $username;

$age = 21;
echo "<br>";
echo "<br>";
echo $age;
echo "<br>";

$bool = true;
echo "<br>";
echo $bool;
echo "<br>";

$array = ["Momchil", 21];
echo "<br>";
echo $array [0];
echo "<br>";
echo $array [1];
echo "<br>";

$assocarray = ["username" => "Momchil", "age" => "21"];
echo "<br>";
echo $assocarray ["username"];
echo "<br>";
echo $assocarray ["age"];
echo "<br>";

for($i=0;$i<2;$i++)
{
	echo "<br>";
	echo $array[$i];
	}
echo "<br>";

foreach ($assocarray as $elements) {
	echo "<br>";
	echo $elements;
}
