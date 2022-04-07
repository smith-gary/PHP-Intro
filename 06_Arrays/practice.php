<?php
	
	// Constants
	define("TITLE", "Arrays");
	
	// Custom Variables
	$lesson = 6;
	$name = "Gary";
	$date = date('Y');
	// Moustache Array
	$moustaches = array("Handlebar", "Salavdor Dali", "Fu Manchu");
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo Title ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php echo $lesson ?>: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<li><?php echo $moustaches[0] ?></li>
					<li><?php echo $moustaches[1] ?></li>
					<li><?php echo $moustaches[2] ?></li>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy; <?php echo $date ?> - <?php echo $name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
