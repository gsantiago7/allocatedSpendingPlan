
<?php
session_start(true);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

////////////////////////////////////////////////////////////////////////////////////////
//Set Up
////////////////////////////////////////////////////////////////////////////////////////
include 'header.php';
echo "<h2 class='text-center'>Allocated Spending Plan <sub>version 1.01</sub></h2>";
$base = $_GET['base'];
$wbase = $base / 4;
$dbase = $base / 30;
$calc = array(.05 , .33 , .10 , .05 , .10 , .02 , .05 , .05 , .05);
$label = array("Savings" ,"Housing" , "Utilities" , "Food" , "Transportation" , "Clothing" , "Medication" , "Personal" , "Recreational");
////////////////////////////////////////////////////////////////////////////////////////
//start monthly budget
////////////////////////////////////////////////////////////////////////////////////////
echo "<div class='row'>";
echo "<h2>Monthly</h2>";
echo "<div class ='col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
for($i = 0; $i < count($calc); $i++){
	$result = $base * $calc[$i];

	echo "<div class='table tableAlt'>";
	echo $label[$i] . " ";



	echo "$" . number_format($result , 2 , '.' , ',') . "<br>";
	echo "</div>";

	//$base =  $base - $result;
}


 $left = $base * .15;
 echo "Cash at hand: " . number_format($left , 2 , '.' , ',');
echo "<br>";
echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////
//start weekly budget
////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Weekly</h2>";
echo "<div class ='col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
for($i = 0; $i < count($calc); $i++){
	$result = $wbase * $calc[$i];

	echo "<div class='table tableAlt'>";
	echo $label[$i] . " ";



	echo "$" . number_format($result , 2 , '.' , ',') . "<br>";
	echo "</div>";

	//$base =  $base - $result;
}

 $wleft = $wbase * .15;
 echo "Cash at hand: " . number_format($wleft , 2 , '.' , ',');
echo "<br>";
echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////
//start daily budget
////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Daily</h2>";
echo "<div class ='col-lg-4 col-md-4 col-sm-4 col-xs-12'>";
for($i = 0; $i < count($calc); $i++){
	$result = $dbase * $calc[$i];

	echo "<div class='table tableAlt'>";
	echo $label[$i] . " ";



	echo "$" . number_format($result , 2 , '.' , ',') . "<br>";
	echo "</div>";

	//$base =  $base - $result;
}

 $dleft = $dbase * .15;
 echo "Cash at hand: " . number_format($dleft , 2 , '.' , ',');
echo "<br>";
echo "</div>";
echo "</div>";
////////////////////////////////////////////////////////////////////////////////////////
//Pie Chart dataGrab
////////////////////////////////////////////////////////////////////////////////////////
// This is just an example of reading server side data and sending it to the client.
// It reads a json formatted text file and outputs it.

$string = file_get_contents("data.json");
echo $string;

// Instead you can query your database and parse into JSON etc etc


include 'footer.php';
