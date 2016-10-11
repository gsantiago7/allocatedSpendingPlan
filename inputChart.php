<?php
include 'connect.php';
include 'header.php';
$savings = $_GET['savings'];
$housing = $_GET['housing'];
$utilities = $_GET['utilities'];
$food = $_GET['food'];
$transport = $_GET['transport'];
$clothing = $_GET['clothing'];
$medication = $_GET['medication'];
$personal = $_GET['personal'];
$recreation = $_GET['recreation'];
?>
	////////////////////////////////////////////////////////////////////////////////////////
//Start bill check
////////////////////////////////////////////////////////////////////////////////////////

function savings_compare(){
if($savings > $base * $calc[0]){
	echo "green";
}else{
	echo "red";	
}}
function housing_compare(){
if($housing > $base * $calc[0]){
	echo "green";
}else{
	echo "red";	
}}
function utilities_compare(){
if($savings > $base * $calc[1]){
	echo "green";
}else{
	echo "red";	
}}
function food_compare(){
if($savings > $base * $calc[2]){
	return "green";
}else{
	return "red";	
}}
function transport_compare(){
if($savings > $base * $calc[3]){
	echo "green";
}else{
	echo "red";	
}}
function clothing_compare(){
if($savings > $base * $calc[4]){
	echo "green";
}else{
	echo "red";	
}}
function medication_compare(){
if($savings > $base * $calc[5]){
	echo "green";
}else{
	echo "red";	
}}
function personal_compare(){
if($savings > $base * $calc[6]){
	echo "green";
}else{
	echo "red";	
}}
function recreation_compare(){
if($savings > $base * $calc[7]){
	echo "green";
}else{
	echo "red";	
}}

?>
	
	<form method="get" action="index.php" class="form formAlt">
		<p>Savings: <input type="text" name="savings" placeholder="$ ##.##"></p>
		<p>Housing: <input type="text" name="housing" placeholder="$ ##.##"></p>
		<p>Utilities: <input type="text" name="utilities" placeholder="$ ##.##"></p>
		<p>Food: <input type="text" name="food" placeholder="$ ##.##"></p>
		<p>Transport: <input type="text" name="transport" placeholder="$ ##.##"></p>
		<p>Clothing: <input type="text" name="clothing" placeholder="$ ##.##"></p>
		<p>Medication: <input type="text" name="medication" placeholder="$ ##.##"></p>
		<p>Personal: <input type="text" name="personal" placeholder="$ ##.##"></p>
		<p>Recreation: <input type="text" name="recreation" placeholder="$ ##.##"></p>
		<input type="submit" value="submit" class="">
	</form>	

	<div>
		<p>Savings: <div class="<?php savings_compare();?>"></div></p>
		<p>Housing: </p>
		<p>Utilities: </p>
		<p>Food: </p>
		<p>Transport: </p>
		<p>Clothing: </p>
		<p>Medication: </p>
		<p>Personal: </p>
		<p>Recreation: </p>
	</div>	