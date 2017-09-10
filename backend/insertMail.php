<?php
$response = '';
$success = '';

if($_SERVER["REQUEST_METHOD"] === "POST"){

	if(isset($_POST['mail'])){
		include('test.php');
		include('config.php');

		$mail = test_input($_POST["mail"]);
	    // Check if there's only alphanumeric characters in the string
	    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	    	// Check if the returned string is a valid email address

	    	$success = false;
	    	$response = "Ce n'est pas une adresse email valide.";


	    } else if ($result = $conn->query("SELECT COUNT(*) FROM mail_list WHERE mail='$mail'")){

	    	$count = $result->fetch_row();
	    	// Fetch the number of matching emails in DB

	    	if ($count[0] > 0){
	    		// Check if given email is unique

	    		$success = false;
	    		$response = "Cette adresse email a déjà été renseignée.";

	    		$conn->close();

	    	} else {

				$sql = "INSERT INTO mail_list (id,created_date,mail)
				VALUES ('','','$mail')";

				if ($conn->query($sql) === TRUE) {
					// Check that request is passed correctly

					$mailId = $conn->insert_id;

					$mailReq = $conn->query("SELECT mail FROM mail_list WHERE id='$mailId'");
					$mailFetch = $mailReq->fetch_row();

				    $conn->close();

				    $success = true;
				    $response = "l'adresse ".$mailFetch[0]." a bien été enregistrée, merci !";

				} else {
				    //echo "Error: " . $sql . "<br>" . $conn->error;
				    $conn->close();

				    $success = false;
				    $response = "Il y a eu une erreur lors de la connection à la base de données, veuillez réessayer plus tard.";

				}

	    	}


	    } 

	} 

}
?>