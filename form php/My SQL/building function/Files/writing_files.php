<?php

$file = "ex.txt";

if ($handle = fopen($file, 'w')) {
  fwrite($handle, 'php what is it');
  fclose($handle);
} else {

  echo "it wont give up";
}
