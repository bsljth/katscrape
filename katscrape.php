<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATScrape</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif+Caption&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<style>
    @media (max-width: 250px) {
        h5 {
            text-align: center;
            font-size: 12px;
            font-family: 'PT Serif Caption', serif;
            margin-top: 5%;
        }
    }

    h5 {
        text-align: center;
        margin-top: 5%;
        font-family: 'PT Serif Caption', serif;
    }

    p {
        font-family: 'PT Serif Caption', serif;
    }

</style>

<body>

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
printf("<h5>Matters for Adv. %s on %s.%s.%s:</h5>", $advocate, $day, $month, $year);
katscrape();
?>
    
</body>
</html>