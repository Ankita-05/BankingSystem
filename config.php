<?php
	$host = "localhost";
        $user = "id17448537_root";
        $pass = "FhGr!*2[v#aVsr6$";
        $db = "id17448537_sparksbank_db";
        $charset = "utf8mb4";

        $conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}
?>


