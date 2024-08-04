<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php


		if (1 < 1) {
			echo "i love php <br>";
		} elseif (20 > 10) {
			echo "i love that <br>";
		} else {
			echo "idk";
		}


		for ($i = 0; $i <= 10; $i++) {
			echo $i;
		}


		$value = 10;
		switch ($value) {
			case  10:
				echo " THATS 10 MAN";
				break;
			case  2:
				echo "is it?";
				break;
			case  3:
				echo "is it?";
				break;
			case  4:
				echo "is it?";
		}
		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>