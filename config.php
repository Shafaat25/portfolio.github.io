<?php

$baseurl= "https://shafaatrauf.000webhostapp.com/";

$servername = "localhost";
$username = "root";
$password = "";
$db = "myportfolio";

// create connection
$mysqli = mysqli_connect($servername, $username, $password, $db);

//not created
if(!$mysqli){
	die("Connection Failed:" . mysqli_connect_error());
	echo 'failed';
	}
