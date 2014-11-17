<!DOCTYPE html>
<html>
	<head>
		<?php include('include/head.php'); ?>
		<title>Contact | Oldeal.com</title>
		
	</head>
	<body>
	<header>
		<?php include('include/nav-top.php');?>
	</header>
	<section class="fullPresentation">
		<div class="row">
			<div class="small-12">
				<div class="presentation">
					<h2>Loin des yeux, <strong>près du coeur</strong></h2>
					<h3>Des économies l'esprit libre grâce aux maisons de retaite modernes et isolées du monde par Oldeal</h3>
				</div>
			</div>
		</div>
	</section>

	<section class="formContact">
		<div class="row">

			<div class="medium-6 medium-push-6 columns">
				<h3>Commencez votre nouvelle vie !</h3>
				<p>Vous en avez assez de payer <strong>des maisons de retraite</strong> hors de prix ? Vous vous privez d’achats comme un écran LCD, des loisirs ou encore des vacances ? Vous êtes fatigué de vous occuper de quelqu’un qui ne sait plus qui vous êtes ?
				<br/>Alors contactez-nous dès maintenant et <strong>commencez votre nouvelle vie !</strong></p>
			</div>
			<div class="medium-6 medium-pull-6 columns">
				<div class="alertZone">
					<div data-alert class="alert-box radius">
						<a href="#" class="close">&times;</a>
					</div>
				</div>

				<form action="#" id="formmail" name="formSaisie" method="POST">
					<div class="row">
					    <div class="large-12 columns">
							<input id="checkbox1" type="checkbox"><label for="checkbox1">Vous voulez recevoir la brochure complèmentaire Oldeal</label><br/>
							<input id="checkbox2" type="checkbox"><label for="checkbox2">Faire une demande de devis</label>
							<input type="text" name="lastName" id ="lastName" value="" placeholder="Votre nom" onblur="verifLastName(this)">
							<input type="email" name="email" id="email" value="" placeholder="Votre mail" maxlength="30" onblur="verifEmail(this)">
							<label>Votre formule
							<select name="plan" id="plan">
				        		<option value="1">Aucune</option>
				        		<option value="2">Formule n° 1</option>
				        		<option value="3">Formule n° 2</option>
				        		<option value="4">Formule n° 3</option>
			        		</select>
    						<textarea rows="10" cols="60" name="message" id="message" placeholder="Ecrivez votre message..." maxlength="700" onblur="verifMessage(this)"></textarea><br>
							<input class="button right" type="submit" id="envoyer" name="envoyer" value="Envoyer">	
					    </div>
					 </div>
				</form>
			</div>
		
			
		</div>
	</section>

		<footer>
			<?php include('include/nav-bottom.php'); ?>
		</footer>

		<?php include('include/scripts-bottom.php');?>
	</body>
</html>