<?php

require "../config.php";

use App\User;

try {
	$result = User::attemptLogin('emma.williams@example.com', 'secretpassword');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

	$result = User::attemptLogin('john.doe@example.com', 'wrong password');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

	$result = User::attemptLogin('jane.johnson@example.com', 'mysecurepassword');
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

