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
				<img src="./images/phpImage.jpeg" alt="PHP logo image" class="img-fluid py-3">
			</div>
		</div>
		<div class="row d-flex bg-dark">
			<!-- Section header -->
			<div class="col-lg-4 align-self-center">
				<h2 class="display-3 text-light text-center">PHP Examples <br>Day 1</h2>
			</div>

			<!-- PHP contents -->
			<div class="col-lg-8 bg-white">
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
				<p>Similar to JS, PHP also has variables that can be either static or dynamically changed. Variables are represented by <span class="highlighted">$</span> followed by the name of the variable. If you want to referencec a variable without it displaying the contents, you must use an escape function using '\' in front of the '$'. Another important point is that unlike keywords, variables are case sensitive. For example:</p>
				<?php // Intro to variables
					$hello = "Hello world. This is a message stored as a variable called '<b>\$hello</b>' in php and then dynamically added to the page through an echo call.";

					echo $hello . "<br>";

					$number1 = 1.99;
					$number2 = 5;

					echo "Here is an example of numbers and floats being used together: number1 = " . $number1 . " and number2 = " . $number2 . " and the sum of these two are = " . ($number1 + $number2);
				?> <!-- Variables end -->

				<!-- Scopes -->
				<h2 class="section">Variable Scopes</h2>
				<p>PHP has 3 main ways in which variables are able to be declared anywhere in the script. The scope refers to where the variable has been both declared and where it can be used.</p>
				<p>PHP has three different variable scopes:</p>
				<ul>
					<li><b>Global:</b> A variable decleared <b>outside</b> a function and can only be accessed outside a function.</li>
					<li><b>Local:</b> A variable that is decleared <b>within</b> a function and can only be accessed within said function.</li>
					<li><b>Static:</b> A variable that isn't deleted after function has been run and is avalible for a further job.</li>
				</ul>
				<h3>Examples:</h3>
				<h4 class="text-secondary">Global</h4>
				<?php // Global variables example
					$globalVar = "This is a global variable and can be used anywhere outside of a function.";
					echo "This is using a global variable: <b>" . $globalVar . "</b>";
				?>
				<h4 class="text-secondary">Local</h4>
				<?php // Local variable example
					function localFunction(){
						$localVar = "This is a local variable and can only be used inside of a function that it has been defined in.";
						echo "This is using a local variable: <b>" . $localVar . "</b>";
					}
					localFunction();
				?>
				<h4 class="text-secondary">Static</h4>
				<?php // Static variable example
					function staticFunction(){
						static $x = 99;
						static $it = 0;
						echo $x . " is iteration " . $it . "<br>";
						$x++;
						$it++;
					}
					staticFunction();
					staticFunction();
					staticFunction();
					staticFunction();
				?>
				<!-- Scopes end -->
			</div>
		</div>
	</div>
</body>
</html>