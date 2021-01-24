<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "notes_tutorial";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect");
}
  