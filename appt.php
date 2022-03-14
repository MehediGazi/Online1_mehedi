<?php

	$email = $_GET["EMAIL"];

	$date = $_GET["DATE"];
    $from = $_GET["From"];
    $to = $_GET["to"];
    $stat = 'No';



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO ticketbooking (EMAIL, APPT_DATE, FROM_LOCATION, TO_LOCATION, STATUS) VALUES ('$email', '$date', '$from', '$to','$stat')" )

		or die("Can not execute query");



	echo "Record inserted:<br>";



	echo "<p><a href=index.php>READ all records</a>";

?>