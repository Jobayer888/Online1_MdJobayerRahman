<?php

	$Name = $_GET["Name"];

	$APPT_NAME = $_GET["APPT_NAME"];

    $From_Location = $_GET["From_Location"];
    $To_location = $_GET["APPT_NAME"];
    $STATUS = $_GET["STATUS"];


	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO t0 VALUES ( '', '$Name', '$APPT_NAME', $From_Location, $To_location, $STATUS )" )

		or die("Can not execute query");


	echo "<p><a href=read.php>READ all records</a>";

?>