<?php

function showalldata()
{
  global $connection;
  $query = "SELECT id FROM users";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query failed: ' . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function updatetable()
{
  global $connection;

  if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['id'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $ID = (int)$_POST['id'];

    $username = mysqli_real_escape_string($connection, $username);
    $pass = mysqli_real_escape_string($connection, $pass);

    // Hash the password
    $hashformat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt = $hashformat . $salt;
    $password = crypt($pass, $hashF_and_salt);

    // Use the hashed password in the query
    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $ID";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed: " . mysqli_error($connection));
    } else {
      echo "Record updated successfully!";
    }
  } else {
    echo "Please fill in all fields.";
  }
}

function deleterows()
{
  global $connection;

  if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['id'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $ID = (int)$_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $ID";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed: " . mysqli_error($connection));
    } else {
      echo "Record updated successfully!";
    }
  } else {
    echo "Please fill in all fields.";
  }
}
