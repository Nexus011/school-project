<!DOCTYPE html>
<html>
<head>
	<?php $title = 'Accueil'; ?>
	<title><?php if(isset($title)) { echo $title; } else { echo '$title non défini...'; } ?></title>
	<meta charset="utf-8">
	<meta lang="fr">
	<meta name="description" content="Cette page est destinée à faire des test en CSS ainsi qu'en PHP.">
	<link rel="stylesheet" type="text/css" href="/fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<?php require('header.php') ?>
	<div class="d-flex p-2 bd-highlight px-md-5" style="background-color: #485460; justify-content: center; color: white;">
		<h1 style="margin: 15px;">Bienvenue sur notre site.</h1>
	</div>
	<div class="d-flex p-2 bd-highlight px-md-5" style="background-color: #343a40; color: white;">
		<h2 style="margin-top: 50px !important; margin: 20px;">Voici les objectifs de notre organisation</h2>
		<ul class="fa-ul" style="margin: 20px;">
			<li><span class="fa-li"><i class="fas fa-spinner fa-pulse"></i></span> Acquérir de nouvelles connaissances</li>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 50%; background-color: #1e272e !important;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
			</div>
			<li><span class="fa-li"><i class="fas fa-check-square"></i></span><s> Savoir correctement gérer une infrastructure</s></li>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 100%; background-color: #1e272e !important;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
			</div>
			<li><span class="fa-li"><i class="fas fa-spinner fa-pulse"></i></span> Avancer sur les projets communs.</li>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 20%; background-color: #1e272e !important;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">20%</div>
			</div>
		</ul>
	</div>
	<form action="reddirect.html" method="get" class="form">
		<fieldset>
			<h2 class="px-md-5" style="margin-top: 20px; margin-bottom: 20px;">Nous contacter</h2>
			<div class="form-group px-md-5">
				<label for="emailinput">Votre email</label>
				<input type="email" name="email" class="form-control" id="emailinput" placeholder="contact@exemple.com" required>
			</div>
			<div class="form-group px-md-5">
				<label for="nameinput">Votre nom</label>
				<input type="text" name="firstname" class="form-control" id="nameinput" placeholder="John Doe" required>
			</div>
			<div class="form-group px-md-5">
				<label for="requestinput">Quelle est l'objet de votre demande ?</label>
				<input type="text" name="request" class="form-control" id="requestinput" placeholder="Contacter le support..." required>
			</div>
			<div class="form-group col px-md-5">
				<label for="messageinput">Votre demande</label>
				<textarea name="message" id="messageinput" class="form-control" rows="5" placeholder="Entrez votre message..." required></textarea>
			</div>
			<div class="px-md-5"><input type="submit" value="Envoyer !" class="btn btn-primary"></div>
		</fieldset>
	</form>
	<?php require('footer.php') ?>
</body>
</html>
