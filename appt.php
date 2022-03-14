<?php

	$email = $_GET["EMAIL"];

	$date = $_GET["DATE"];
    $from = $_GET["From"];
    $to = $_GET["To"];
    $stat = 'No'



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO ticketbooking (EMAIL, APPT_DATE, FROM_LOCATION, TO_LOCATION, STATUS) VALUES ($email, $date, $from, $to, $stat)" )

		or die("Can not execute query");



	echo "Record inserted:<br>;



	echo "<p><a href=read.php>READ all records</a>";

?>