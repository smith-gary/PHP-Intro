<?php

	// Constants
	define("TITLE", "Arrays");

	// Variables
	$name = "Gary";
	$date = date('Y');

	
	// Arrays
	$people = array (
		array (
			"name" => "carter",
			"place" => "canada",
			"description" => "adult",
			"stache" => "handlebar",
			"stache_color" => "black"
		),
		array ( 
			"name" => "rodrigo",
			"place" => "uruguay",
			"description" => "teenager",
			"stache" => "fu man",
			"stache_color" => "brown"
		),
		array (
			"name" => "giovanni",
			"place" => "italy",
			"description" => "child",
			"stache" => "salvi",
			"stache_color" => "blonde"
		)
	);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $people[0][name]; ?> from <?php echo $people[0][place]; ?></h3>
				<p><strong><?php echo $people[0][name]; ?></strong> is quite the <strong><?php echo $people[0][description]; ?></strong>! He sports a solid <strong><?php echo $people[0][stache] ?></strong> Moustache that is <strong><?php echo $people[0][stache_color]; ?></strong>.</p>
				
				<h3><?php echo $people[1][name]; ?> from <?php echo $people[1][place]; ?></h3>
				<p><strong><?php echo $people[1][name]; ?></strong> is rather dapper <strong><?php echo $people[1][description]; ?></strong>! He proudly wears a <strong><?php echo $people[1][stache] ?></strong> Moustache that is colored a gentle <strong><?php echo $people[1][stache_color]; ?></strong>.</p>
				
				<h3><?php echo $people[2][name]; ?> from <?php echo $people[2][place]; ?></h3>
				<p><strong><?php echo $people[2][name]; ?></strong> might seem too young for a stache because he is a <strong><?php echo $people[2][description]; ?></strong>! But he proudly displays his <strong><?php echo $people[2][stache] ?></strong> at school! Although, it's a little hard to see because it's light <strong><?php echo $people[2][stache_color]; ?></strong>.</p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo $date ?> - <?php echo $name ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
