<?php

// Connect to the database
$connection = mysqli_connect('localhost', 'root', '', 'phpdatabase');

if ($connection) {
  echo "We are connected";
} else {
  die("Database connection failed");
}

// Prepare the SQL insert query
$query = "SELECT * from users";

// Execute the query
$result = mysqli_query($connection, $query);

if (!$result) {
  die('Query failed: ' . mysqli_error($connection));
} else {
  echo "Record created successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="col-sm-6">

      <?php
      // Assume $result is a valid MySQLi result resource
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <pre>
<?php
        print_r($row);
?>
</pre>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>