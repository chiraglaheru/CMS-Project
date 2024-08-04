<?php

print_r($_GET); //Super global variable

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $id = 10;
  ?>
  <a href="get.php?id=<?php echo $id; ?>">Click here 200 </a>
</body>

</html>