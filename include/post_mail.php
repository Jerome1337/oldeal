<?php

//include ('config.php');

if(isset($_POST) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['plan']) && isset($_POST['message']))
{
	extract($_POST);

	if (!empty($lastName) && !empty($email) && !empty($plan) && !empty($message))
	{
		if (preg_match("#^[a-zA-Z0-9._-]+@(yahoo|gmail|hotmail|live|msn|aol).[a-z]{2,4}$#",$email))
		{
			// $message=str_replace("\'","'", $message);
			// $destinataire="waroux.melanie@gmail.com";
			// $sujet="Demande de contact";
			// $message="
			// Nom: $lastName \n
			// Prénom: $firstName \n
			// Email: $email \n 
			// Message: $message";
			// $entete="From: $nom \n Replay-To: $email";
			// mail($destinataire, $sujet, $message, $entete);

			$options = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
			$pdo= new PDO('mysql:host=localhost;dbname=oldeal','root','', $options); 	
			$req = $pdo->prepare('INSERT INTO user (lastName, email, plan, message) VALUES(:lastName, :email, :plan, :message)');
			$req->execute(array(
				'lastName' => $lastName,
				'email' => $email,
				'plan' => $plan,
				'message' => $message
				));

			echo 'ok';
		}
		else
			{
				echo 'L\'adresse mail n\'est pas au bon format (gmail or hotmail)';
				}
	}

	else
		{
			echo 'Une erreur est survenue lors de l\'envoi, remplissez tous les champs !';
		}
}

?>