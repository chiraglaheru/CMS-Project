<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		echo pow(2, 5);
		echo  rand();
		echo "<br>";

		$string = "hello si hol";
		echo  strlen($string);
		echo "<br>";


		$values = [11, 12, 13, 14, 15];
		$found = in_array($string, $values);

		if ($found) {
			echo "ok";
		} else {
			echo "naw";
		}
		/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


		?>





	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>