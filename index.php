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
			}

			div#form {
					top: 20%;
					left: 10%;
					display: block;
					position: absolute;
				}

			input {
				width: 250px;
			}
		</style>
    
		<!--
			Used responsive styling from: https://stackoverflow.com/questions/12645366/css-responsive-center-div
		-->
	
	</head>
	
	<body>
		
		<h4>KATscrape</h4>
		<p>A KAT cause list parser.</p>
		
		
		<div id="form">
		    <form action="katscrape.php" method="post">
					
			 	<label for="advname">Enter your name as it appears in the KAT Cause List:</label><br />
			 	<input type="text" id="advname" name="advname"></input><br /><br />
					
				<label for="cldate">Enter the date of the cause list:</label><br />
				<input type="date" id="cldate" name="cldate"><br /><br />
					
				<button type="submit" class="btn btn-outline-primary">Submit</button>
		    </form>
		</div>

      </body>

</html>