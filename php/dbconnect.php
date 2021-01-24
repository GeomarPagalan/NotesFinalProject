<?php

	$dsn ="mysql:host=localhost;dbname=notes_tutorial";
	$user = "root";
	$password = "";

	$pdo = new PDO($dsn, $user, $password);


	if(!$pdo){
		echo "Failed to connect to MySQL Database";
		exit();
	}





?>