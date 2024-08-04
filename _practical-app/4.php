<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php


		function calcution()
		{

			$number1 = 20;
			$number2 = 10;
			$sum = $number1 + $number2;
			return $sum;
		}
		$thesum = calcution();
		echo $thesum . "<br>";

		function hola($spanish)
		{

			echo $spanish;
		}

		hola('Medellien');
		?>



		<!-- /* Step1: Define a function and make it return a calculation of 2 numbers

		Step 2: Make a function that passes parameters and call it using parameter values -->

		<!-- 
		*/



		?> -->







		<?php include "includes/footer.php"; ?>