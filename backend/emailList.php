<?php

include('config.php');

$sql = "SELECT mail, created_date FROM mail_list ORDER BY created_date DESC"

if ($conn->query($sql) === TRUE) {
	// Check that request is passed correctly

	$mailsFetch = $conn->fetch_row();
	$conn->close();

	echo $sql;

} else {
	//echo "Error: " . $sql . "<br>" . $conn->error;

	$conn->close();
	$response = "Il y a eu une erreur lors de la connection à la base de données, veuillez réessayer plus tard.";

}


?>