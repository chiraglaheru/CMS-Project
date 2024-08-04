<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  function addnumbers($number1, $number2)
  {

    $sum = $number1 + $number2;

    return $sum;
  }

  $result = addnumbers(23, 43);
  $result = addnumbers(100, $result);

  // we cam reuse it and add 100 or anthing as many times we want

  echo $result;

  ?>
</body>

</html>