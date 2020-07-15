<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

		<title>KATscrape</title>

		<style>
			@media (max-width: 100px) {
				div#form {
					display: block;
				}
			
				h4 {
					text-align: center;
					font-size: 15px;
					font-family: 'PT Serif Caption', serif;
				}

				p, label, input {
					font-family: 'PT Serif Caption', serif;
					font-size: 12px;
				}

			}
			h4, p, label, input {
				font-family: 'PT Serif Caption', serif;
			}

			h4, p {
				margin-top: 1%;
				margin-left: 1%;
				color: #ffffff;
			}

			h4 {
				font-weight: bold;
			}

			div#form {
					text-aling: center;
					max-width: 430px;
					margin: 0 auto 20px;
					top: 20%;
					left: 10%;
					display: block;
					position: absolute;
				}

			input#advname {
				width: 300px;
			}

			a {
				font-family: 'PT Serif Caption', serif;
				text-decoration: none;
				color: #dfdfdf;
			}

			a:hover {
				color: #ffffff;
				text-decoration: underline;
			}

			#beta {
				display: inline;
				font-size: 22px;
			}
		</style>
    
		<!--
			Used responsive styling from: https://stackoverflow.com/questions/12645366/css-responsive-center-div
		-->
	
	</head>
	
	<body>
		
		<nav class="navbar navbar-dark bg-primary">
		<h4>KATscrape<span><p id="beta"><sup>BETA</sup></p></span></h4>
		<p>A KAT cause list parser. Developed by <a href="https://twitter.com/basilajith/" target="_blank">Basil Ajith.</a></p>
		
		</nav>

		
		
		<div id="form">
		    <form action="katscrape.php" method="post">
				
				<div class="form-group>
			 		<label for="advname">Enter your name as it appears in the KAT Cause List:</label><br />
			 		<input type="text" id="advname" name="advname" required oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"></input><br /><br />
				</div>
				<!--forcing all caps entry taken from: https://stackoverflow.com/a/49904823/6041444-->

				<label for="cldate">Enter the date of the cause list:</label><br />
				<input type="date" id="cldate" name="cldate" required><br /><br />
					
				<button type="submit" class="btn btn-outline-primary">Submit</button>
		    </form>
		</div>

      </body>

</html>