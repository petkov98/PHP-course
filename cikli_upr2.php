<?php
if(3>4){
	echo "vqrno";
} else{
	echo "vasheto smqtane ne e pravilno";
}

echo "<br>";
echo "<br>";

$myNumber = 0;
if($myNumber == 2){
	echo "vasheto chislo e 2";
} elseif($myNumber == 1){
	echo "vasheto chislo e 1";
} else{
	echo "vasheto chislo ne otgovarq na nito edno";
}

echo "<br>";
echo "<br>";

$myNumber = 2;
switch ($myNumber) {
	case $myNumber > 2: /*vse edno purviq if */
	echo "My number is greater than 2";
	break;

	case $myNumber == 1: /*vse edno elseif*/
	echo "My number is equal to 1";
	break;

	default: /*vse edno else*/
	echo "No match";
	break;
}

echo "<br>";
echo "<br>";

function printMyName($myName) { /*funkciq*/
	echo "My name is".$myName;
}
printMyName("Momchil");
echo "<br>";
printMyName("Misha");
echo "<br>";
printMyName("Surat patkan");
echo "<br>";
printMyName("Gosho ot pochivka");

echo "<br>";
echo "<br>";


function modifyName($myName) { /*funkciq*/
	echo "My name is ".$myName;
	$myName = "Ivan";
	return $myName;
}
$myNewName = modifyName("Momchil");
echo ". My new name is ".$myNewName;