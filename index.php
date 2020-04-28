<!DOCTYPE html>
<html>
<head>
	<title>PHP Introduction</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		h2.section{
			border-bottom: 1px solid;
			border-color: #a8a8a8;
		}
		span.highlighted{
			background-color: #cccccc;
			color: red; 
			padding-left: 3px;
			padding-right: 3px;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-secondary">
			<div class="col-12">
				<h1 class="display-4 text-center text-light py-3">PHP Introduction</h1>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-sm-6">
				<h2 class="section">What is PHP?</h2>
				<ul>
					<li>PHP stands for: <b>Hypertext Preprocessor</b></li>
					<li>PHP is a widely-used, open source scripting language</li>
					<li>PHP scripts are executed on the server</li>
					<li>PHP is free to download and use</li>
				</ul>
				<div class="alert alert-warning">
					<h3>PHP Use Case</h3>
					<p>PHP is a very powerful language that is used all over the internet and on some of the biggest blogging sites/systems such as Facebook and WordPress while also being simple enough that it can be a beginner's first server side language!</p>
				</div>
			</div>
			<div class="col-sm-6">
				<img src="./images/phpImage" alt="PHP logo image" class="img-fluid">
			</div>
		</div>
		<div class="row d-flex bg-dark">
			<div class="col-6 align-self-center">
				<h2 class="display-1 text-light">PHP Examples</h2>
			</div>
			<div class="col-6 bg-white">
				<!-- Echo -->
				<h2 class="section">PHP echo</h2>
				<?php // PHP echo start
					// Printing a string
					echo "Hello world! The keyword 'echo' is treated as an inline element so you need a 'br' tag to start a new line <br>";
					EcHo "PHP keywords are not case sensitive. For example you can have 'echo' or EcHo' and it won't effect the output"; 
				?> <!-- PHP echo end -->

				<!-- Comments -->
				<h2 class="section">Comments</h2>
				<p>There are a number of ways to comment inside of a php block of code. Here are some examples:</p>
				<ul class="list-group">
					<li class="list-group-item">// for single line</li>
					<li class="list-group-item"># another way for single line</li>
					<li class="list-group-item">/**/ for multiple lines</li>
				</ul>

				<!-- Variables -->
				<h2 class="section">Variables</h2>
				<p>Similar to JS, PHP also has variables that can be either static or dynamically changed. Variables are represented by <span class="highlighted">$</span> followed by the name of the variable. For example</p>
				<?php
					$hello = "Hello world. This is a message stored as a variable called $hello in php and then dynamically added to the page through an echo call.";

					echo "$hello";
				?>

			</div>
		</div>
	</div>
</body>
</html>