<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM  Ticket_Booking " )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Name</th> <th>APP_Date</th> <th>From_Location</th><th>To_location</th> <th>Status</th> <th>addBooking</th> <th>CancelBooking</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $NAME </td>";
		echo "<td> $APPT_DATE </td>";
        echo "<td> $FROM_LOCATION </td>";
        echo "<td> $TO_LOCATION </td>";
        echo "<td> $STATUS </td>";

		echo "<td> <a href = 'appt_input.php?id=$ID'> addBooking </a> </td>";
		echo "<td> <a href = 'cancel_input.php?id=$ID'> CancelBooking </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

?>