<?php

	if($_GET['id']){
		$id = $_GET['id'];

		// sql to delete a record
		$sql = "DELETE FROM patient_table WHERE id= ${id}";

		if (mysqli_query($con, $sql)) {
		  header("Location: http://localhost/excel-proto2/");
		} else {
		  echo "Error deleting record: " . mysqli_error($con);
		}

		mysqli_close($con);
	}

?>