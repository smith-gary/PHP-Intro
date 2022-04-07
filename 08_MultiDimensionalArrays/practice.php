<?php
	
	// Constants
	define("TITLE", "Multi-Dimensional Arrays");
	
	// Custom Variables
	$name = "Gary";
	$date = date('Y');
	$lesson = 8;
	
	// Moustache Multi-Dimensional Array
	$staches = array (
		array (
			"name" => "handebar",
			"creep" => "high",
			"growth" => 14
		),
		array (
			"name" => "salvi",
			"creep" => "extra",
			"growth" => 7
		),
		array (
			"name" => "fu",
			"creep" => "up there",
			"growth" => 90
		)
	);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <?php echo $staches[0][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $staches[0][creep]; ?></strong> and takes <strong><?php echo $staches[0][growth]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $staches[1][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $staches[1][creep]; ?></strong> and takes <strong><?php echo $staches[1][growth]; ?> days</strong> to grow on average.</strong></p>

				<h2>The <?php echo $staches[2][name]; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo $staches[2][creep]; ?></strong> and takes <strong><?php echo $staches[2][growth]; ?> days</strong> to grow on average.</strong></p>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo $date ?> - <?php echo $name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
