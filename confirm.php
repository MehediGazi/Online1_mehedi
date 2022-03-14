<?php

$id = $_GET["id"];
$email = $_GET["EMAIL"];

$date = $_GET["DATE"];
$from = $_GET["From"];
$to = $_GET["To"];
$stat = 'Yes'



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE t0 SET email = '$email', date = '$date', from = '$from', to = '$to', stat='$stat' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br>";



	echo "<p><a href=index.php>READ all records</a>";

?>