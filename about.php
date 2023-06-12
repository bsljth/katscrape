<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<title>KATscrape (BETA) | About</title>

		<style>

			body {
				font-family: "Roboto", sans-serif;
			}


			h5 {
				color: #ffffff;
				font-weight: bold;
			}

			#logo {
				color: white;
				text-decoration: none;
			}

			#description {
				text-align: center;
				padding: 30px;
			}

			#description a {
				color: #007bff;
			}

			#description a:hover {
				text-decoration: underline;
			}

			.blah {
				margin: 40px;
			}

			.footer {
				overflow: hidden;
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: #007bff;
				color: #ffffff;
				text-align: center;
			}

			.footer a {
				color: #ffffff;
				text-decoration: none;
			}

			.footer a:hover {
				text-decoration: underline;
			}

		</style>
    
		<!--
			Used responsive styling from: https://stackoverflow.com/questions/12645366/css-responsive-center-div
		-->
	</head>
	
	<body>
		
		<header>
			<nav class="navbar navbar-dark bg-primary">
				<a id="logo" href="/"><h5>KATscrape<span><sup>BETA</sup></span></h5></a>
			</nav>
		</header>
		
		<main>
			<p id="description">A Kerala Administrative Tribunal cause list 
			parser. Developed by <a href="https://twitter.com/basilajith/" target="_blank">Basil Ajith.</a></p>
		
			<p class="text-justify blah">KATscrape was originally developed as a Python script by Basil Ajith 
			while he was practising in Trivandrum, appearing in KAT quite frequently. It was developed 
			to parse through a day's cause list and identify how many cases his office had to attend on that 
			day.</p>

			<p class="text-justify blah">The simple Python script has now been developed into a web app; written 
			in PHP. However, the current version is only in the 'beta' stage and a lot more features are yet to be 
			added to the application. The source code to the application can be found at the application's Github 
			repository (link below).</p>

		</main>

		<footer>
			<div class="footer">
			<p>&#169; Copyright: <a href="https://github.com/bsljth/" target="_blank">Basil</a>+<a 
			href="https://twitter.com/alfiabasil/" target="_blank">Alfia</a> | <a href="about.php">About</a> | <a 
			href="disclaimer.php">Disclaimer</a> | <a href="https://github.com/bsljth/katscrape.git/">Github</a></p>
			</div>
		</footer>
      </body>

</html>
