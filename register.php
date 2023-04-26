<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="https://www.auf.edu.ph/images/favicon.png">
  <title>Registration Page</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  	<div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card p-3">
    <h1>Register</h1>
    <form action="save-registration.php" method="POST">
      <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" required>
      </div>
      <div class="form-group">
        <label for="middle_name">Middle Name</label>
        <input type="text" class="form-control" id="middle_name" name="middle_name">
      </div>
      <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" pattern=".{8,}" required title="8 characters minimum" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="form-group">
        <label for="birthdate">Birthdate</label>
        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="contact_number">Contact Number</label>
        <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
      </div><br>
      <button type="submit" class="btn btn-primary">Register</button>
      <a href="login.php" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>
</div>
</div>

  <!-- Bootstrap CDN JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
