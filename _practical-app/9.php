<?php
$expiration = time() + (96 * 96 * 24);
setcookie('name', 'value', $expiration);
$_SESSION['message'] = 'hi this is mess';

?>





<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>



<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php
		if (isset($_GET['source'])) {
			echo $_GET['source'];
		}
		?>
		<a href="9.php?source=30124">Click here </a>
		<br>
		<?php

		if (isset($_COOKIE["name"])) {

			echo $_COOKIE["name"];
		}

		if (isset($_SESSION['message'])) {

			echo $_SESSION['message'];
		}
		?>




		<!-- $expiration = time() + (96 * 96 * 24);
		setcookie($expiration);

		/* Create a link saying Click Here, and set
		the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
		*/ -->






	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>