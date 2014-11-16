<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="css/foundation.css">
		<script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
	<header>
			<nav class="top-bar" data-topbar role="navigation">
				<div class="content">
					<ul class="title-area">
						<li class="name">
						    <h1><a href="#">Oldeal</a></h1>
						</li>
					 	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>

					<section class="top-bar-section">
						<!-- Right Nav Section -->
						<ul class="right">
							<li class="active"><a href="#">Accueil</a></li>
							<li><a href="#">Forfaits</a></li>
							<li><a href="#">Contactez-nous</a></li>
						</ul>
					</section>
				</div>
			</nav>
		</header>

<?php

//include ('config.php');

if(isset($_POST) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['message']))
{
	extract($_POST);

	if (!empty($lastName) && !empty($email) && !empty($telephone) && !empty($message))
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
			$req = $pdo->prepare('INSERT INTO user (lastName, email, telephone, message) VALUES(:lastName, :email, :telephone, :message)');
			$req->execute(array(
				'lastName' => $lastName,
				'email' => $email,
				'telephone' => $telephone,
				'message' => $message
				));

			echo '<div data-alert class="alert-box success radius">
					Le message a été envoyé
					<a href="#" class="close">&times;</a>
				</div>';
		}
		else
			{
				echo '<div data-alert class="alert-box alert round">
	  					L\'adresse mail n\'est pas au bon format
	  					<a href="#" class="close">&times;</a>
					</div>';
				}
	}

	else
		{
			echo '<div data-alert class="alert-box alert round">
  					Une erreur est survenue lors de l\'envoi
  					<a href="#" class="close">&times;</a>
				</div>';
		}
}

?>

		<section class="formContact">
			<div class="row">
				<div class="small-12">
					<h2>Contact</h2>

						<p>Vous êtes interessés par notre service ?<br>
					       Vous souhaitez être recontacté par nos conseillers ou recevoir notre brochure ?<br>
						   N'hesitez pas à nous contacter !</p>

						<form action="contact.php" name="formSaisie" method="POST" enctype="multipart/form-data" onsubmit="return valider()">
							
								<input type="text" name="lastName" id ="lastName" value="" placeholder="Votre nom" onblur="verifLastName(this)">

								<input type="email" name="email" id="email" value="" placeholder="exemple@exemple.fr" maxlength="30" onblur="verifEmail(this)">

								<input type="text" name="telephone" id="telephone" value="" placeholder="Votre telephone" maxlength="10" onblur="verifTelephone(this)"><br>

								<textarea rows="10" cols="60" name="message" id="message" placeholder="Votre demande" maxlength="700" onblur="verifMessage(this)"></textarea><br>

								<input class="button [radius round]" type="submit" id="envoyer" name="envoyer" value="Envoyer">	
						</form>
				</div>
			</div>
		</section>
	</body>
</html>