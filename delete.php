<?php

	include 'mysql_connect.php';


	
	if (isset($_GET["id"])) 
	{
		$id = $_GET["id"];
		$delete_sql = "DELETE FROM students WHERE id = $id";

		$result = $conn->query($delete_sql);

		if ($result === TRUE) {
            echo "Data Delete successfully";
        } else {
            echo "Error creating database: " .$conn->error; 
        }

        $conn->close();
	}

	



?>