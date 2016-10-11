
<html>
	<head>
		<META NAME="Title" CONTENT="Allocated Spending Application">
		<META NAME="Keywords" CONTENT="Allocated Spending Plan budget budgeting utilities utility cost of living">
		<META NAME="Subject" CONTENT="Allocated Spending Plan">
		<META NAME="Language" CONTENT="English">
		<META NAME="Robots" CONTENT="INDEX,FOLLOW"><meta name="Author" content="Georgie J Santiago Elizabethtown KY Kentucky Milestone Web Solutions">

		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Allocated Spending Plan <pre>version 1.01</pre></title>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Custom Stylesheet-->	
	<link rel="stylesheet" type="text/css" href="stylesheet.css">

<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData = $.ajax({
          url: "index.php",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(data.json);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 800, height: 400});
    }

    </script>
	</head>

	<body>
	
		<form method="get" action="index.php">
		<input type="text" name="base" placeholder="Monthly Income">
		<input type="submit" name="submit">
	</form>	
