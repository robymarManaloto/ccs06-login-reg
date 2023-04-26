<?php

require "config.php";

use App\User;

try {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = User::attemptLogin($email, $password);

	if (!is_null($result) ) {

		// Set the logged in session variable and redirect user to index page

		$_SESSION['is_logged_in'] = true;
		$_SESSION['user'] = [
			'id' => $result->getId(),
			'fullname' => $result->getFullName(),
			'email' => $result->getEmail()
		];
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
} catch (Exception $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="https://www.auf.edu.ph/images/favicon.png">
  <title>Login Error</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .timer {
      font-size: 1.5rem;
      font-weight: bold;
      color: red;
      margin-top: 1rem;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <h1 class="mt-5">Login Error</h1>
    <p class="lead">Sorry, your login information is incorrect. Please try again.</p>
    <div class="timer">You will be redirected in <span id="countdown">5</span> seconds.</div>
  </div>

  <script>
    let timeLeft = 5;
    const countdownEl = document.getElementById('countdown');
    const countdownTimer = setInterval(() => {
      timeLeft--;
      countdownEl.textContent = timeLeft;
      if (timeLeft === 0) {
        clearInterval(countdownTimer);
        window.location.href = 'login.php';
      }
    }, 1000);
  </script>

</body>
</html>
