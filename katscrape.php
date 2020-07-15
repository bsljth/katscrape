<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATScrape (BETA) | Result</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

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

	h6 {
        margin-top: 20px;
        text-align: center;
        font-weight: bold;
    }

	.footer {
        overflow: hidden;
		position: sticky;
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

<body>

    <header>
		<nav class="navbar navbar-dark bg-primary">
			<a id="logo" href="/"><h5>KATscrape<span><sup>BETA</sup></span></h5></a>
		</nav>
	</header>

<main>
<?php

//HTML DOM Parser; available at: https://sourceforge.net/projects/simplehtmldom/
//require_once "simple_html_dom.php";

$advocate = ucwords(strtolower($_POST["advname"]));
$cldate = $_POST["cldate"];


function katscrape() {
    global $cldate;
    $day = substr($cldate, 8, 2);
    $month = substr($cldate, 5, 2);
    $year = substr($cldate, 0, 4);

    //Array of court numbers
    $court_numbers = array("1", "7", "8", "4");
    foreach($court_numbers as $i) {
        //Getting the webpage content.
        //$dom = file_get_html("http://keralaadministrativetribunal.gov.in/ciskat/pages/cause_list_home.php?type=search&dte=%s/%s/%s&court=%s", $day, $month, $year, $i, false);
        $url = "http://keralaadministrativetribunal.gov.in/ciskat/pages/cause_list_home.php?type=search&dte=".$day."/".$month."/".$year."&court=".$i;
        $lines_array=file($url);
        // turn array into one variable
        $lines_string=implode('',$lines_array);

        //Creating the sitting list for the current iteration.
        $judges_list = array("Mr. Justice T.R. Ramachandran Nair", "Mr. Benny Gervacis", 
        "Mr. V.Rajendran", "Mr. V. Somasundaran", "Mr. Rajesh Dewan");
        $sitting = array();
        foreach($judges_list as $x) {
            if(stristr($lines_string, $x)) {
                array_push($sitting, $x);
            }
        }

        printf("<p><strong>Court No. %s</strong></p>", $i);
        printf("<p>Presiding: %s, %s</p>", $sitting[0], $sitting[1]);
        
        $count = substr_count($lines_string, $_POST["advname"]);
        global $advocate;
        printf("<p>Adv. %s has %u matter(s) in this court.</p>", $advocate, $count);
        echo $lines_string;
    } 
}




//Printing output:
$day = substr($cldate, 8, 2);
$month = substr($cldate, 5, 2);
$year = substr($cldate, 0, 4);
printf("<h6>Matters for Adv. %s on %s.%s.%s:</h6>", $advocate, $day, $month, $year);
katscrape();
?>

</main>
    <footer>
		<div class="footer">
			<p>&#169; Copyright: <a href="https://twitter.com/basilajith/" target="_blank">Basil</a>+<a 
			href="https://twitter.com/alfiaabubaker/" target="_blank">Alfia</a> | <a href="about.php">About</a> | <a 
			href="disclaimer.php">Disclaimer</a> | <a href="https://github.com/pepalf/katscrape.git/">Github</a></p>
		</div>
	</footer>
</body>
</html>