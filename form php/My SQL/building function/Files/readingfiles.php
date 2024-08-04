<?php

$file = "ex.txt";

if ($handle = fopen($file, 'r')) {
  echo  $content = fread($handle, filesize($file));
  fclose($handle);
} else {

  echo "it wont give up";
}
