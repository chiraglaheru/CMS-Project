<?php
if (isset($_POST['data'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];


  $name = array("Edwin", "Nagu", "Mariya");
  $minimum = 5;
  $maximum = 10;

  if (strlen($username)  < $minimum) {
    echo "Should no longer than 5";
  }
  if (strlen($username) > $maximum) {
    echo "Should no longer than 10";
  }
  if (!in_array($username, $name)) {
    echo "sorry you are out ";
  } else {
    echo "welcome";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
</body>

</html>