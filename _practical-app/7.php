<?php
// Database connection
$connection = mysqli_connect('localhost', 'root', '', 'opdata');
if (!$connection) {

	die("Database connection failed:") . mysqli_connect_error($connection);
}

$query = "SELECT * FROM newdata";
$result = mysqli_query($connection, $query);

if (!$result) {
	die("Query failed: ");
}

// Include necessary files
include "functions.php";
include "includes/header.php";
?>

<section class="content">
	<aside class="col-xs-4">
		<?php Navigation(); ?>
	</aside><!--SIDEBAR-->
	<article class="main-content col-xs-8">

		<?php
		while ($record = mysqli_fetch_assoc($result)) {
			echo $record['daysofweek'] . "<br>";
		}
		?>
	</article>
</section>

<?php
include "includes/footer.php";
mysqli_close($connection);
?>