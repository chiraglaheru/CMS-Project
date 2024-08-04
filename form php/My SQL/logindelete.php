<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php
if (isset($_POST['submit'])) {
  deleterows();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="col-sm-6">
      <h2>Update User</h2>
      <form action="logindelete.php" method="post">
        <div class="form-group">
          <label for="id">User ID</label>
          <select name="id" id="id" class="form-control">
            <?php showalldata(); ?>
          </select>
        </div>
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

<?php
mysqli_close($connection);
?>