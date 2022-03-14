<?php

	$ID = $_GET["ID"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM Ticket_Booking WHERE id=$ID" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=index.php>Main page</a>";

?>