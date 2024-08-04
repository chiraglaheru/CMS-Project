<?php
include "db.php";
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  // Escape special characters to prevent SQL injection
  $username = mysqli_real_escape_string($connection, $username);
  $pass = mysqli_real_escape_string($connection, $pass);

  // Hash the password
  $hashformat = "$2y$10$";
  $salt = "iusesomecrazystrings22";
  $hashF_and_salt = $hashformat . $salt;
  $password = crypt($pass, $hashF_and_salt);

  // Use the hashed password in the query
  $query = "INSERT INTO users (username, `password`) VALUES ('$username', '$password')";

  // Execute the query
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query failed: ' . mysqli_error($connection));
  } else {
    echo "Record created successfully!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="col-sm-6">
      <form action="logincreate.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" placeholder="Enter password" name="pass" class="form-control"><br>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </div>
</body>

</html>