<?php

require "config.php";

use App\User;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
}

$user = User::getById($_SESSION['user']['id']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://www.auf.edu.ph/images/favicon.png">
  <title>Welcome Page</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    .quote {
      font-size: 1.5rem;
      font-style: italic;
      margin-bottom: 2rem;
    }

    .user-info-table th {
      width: 30%;
    }

    .user-info-table td {
      vertical-align: middle;
    }
  </style>
</head>
<body>
   <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 mt-5">
        <div class="card">
          <div class="card-header">
            <h4>Welcome <?php echo $_SESSION['user']['fullname']; ?></h4>
          </div>
          <div class="card-body">
            <p class="quote">"The future belongs to those who believe in the beauty of their dreams." - Eleanor Roosevelt</p>
            <table class="table user-info-table">
              <tbody>
                <tr>
                  <th>User ID</th>
                  <td><?php echo $user->getId();?></td>
                </tr>
                <tr>
                  <th>First Name:</th>
                  <td><?php echo $user->getFirstName();?></td>
                </tr>
                <tr>
                  <th>Middle Name:</th>
                  <td><?php echo $user->getMiddleName();?></td>
                </tr>
                <tr>
                  <th>Last Name:</th>
                  <td><?php echo $user->getLastName();?></td>
                </tr>
                <tr>
                  <th>Email:</th>
                  <td><?php echo $user->getEmail();?></td>
                </tr>
                <tr>
                  <th>Birthdate:</th>
                  <td><?php echo $user->getBirthdate();?></td>
                </tr>
                <tr>
                  <th>Gender:</th>
                  <td><?php echo $user->getGender();?></td>
                </tr>
                <tr>
                  <th>Address:</th>
                  <td><?php echo $user->getAddress();?></td>
                </tr>
                <tr>
                  <th>Contact Number:</th>
                  <td><?php echo $user->getContactNumber();?></td>
                </tr>
              </tbody>
            </table>
            <form action="logout.php" method="POST">
              <button type="submit" class="btn btn-primary btn-block">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap CDN JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>