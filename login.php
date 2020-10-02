<?php

print_r($_POST);



print_r($_POST);
function login() {
	$legitUsername = "momo";
$legitPassword = "1234";
if ($_POST["username"] == $legitUsername &&
	$_POST["password"] == $legitPassword
) {
	header("Location: welcome.html"); /*prashte ni kum welcome page pri pravilni parametri za user i pass*/
} else {
	header("Location: index.html"); /*prashta otnovo kum login page ako sa greshni parametrite za username i password*/
}
}
login();
