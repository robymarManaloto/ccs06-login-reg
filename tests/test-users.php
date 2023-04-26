<?php

require "../config.php";

use App\User;

try {
	User::register("Emma", "Williams", "Taylor", "emma.williams@example.com", 'secretpassword', "1990-08-24", "Female", "456 High St, Anytown, USA", "555-987-6543");
	echo "<li>Added 1 record";

	$users = [    
		['first_name' => 'John','middle_name' => 'Doe', 'last_name' => 'Smith', 'email' => 'john.doe@example.com', 'password' => 'mypassword', 'birthdate' => '1985-05-12', 'gender' => 'Male','address' => '123 Main St, Anytown, USA', 'contact_number' => '555-123-4567'],
    	['first_name' => 'Jane','middle_name' => 'Marie', 'last_name' => 'Johnson', 'email' => 'jane.johnson@example.com', 'password' => 'mysecurepassword', 'birthdate' => '1990-02-22', 'gender' => 'Female', 'address' => '456 Elm St, Anycity, USA', 'contact_number' => '555-987-6543'],
   	 	['first_name' => 'Bob', 'middle_name' => '', 'last_name' => 'Brown', 'email' => 'bob.brown@example.com', 'password' => 'password123' , 'birthdate' => '1978-11-03', 'gender' => 'Male', 'address' => '789 Oak St, Anyville, USA', 'contact_number' => '555-555-1212']
	];

	User::registerMany($users);
	echo "<li>Added " . count($users) . " more records";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

