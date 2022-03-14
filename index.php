<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM ticketbooking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Email</th> <th>Date</th> <th>From</th><th>To</th><th>Status</th> <th>addBooking</th> <th>ConfirmBooking</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $EMAIL </td>";
		echo "<td> $APPT_DATE </td>";
        echo "<td> $FROM_LOCATION </td>";
        echo "<td> $TO_LOCATION </td>";
        echo "<td> $STATUS </td>";
		echo "<td> <a> addBooking </a> </td>";
		echo "<td> <a> ConfirmBooking </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=appt_input.php>Make Appoinment</a>";
?>