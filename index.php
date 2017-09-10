
<?php //include('backend/insertMail.php'); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>

<title>Accueil - Les Conteuses de Pas</title>
<meta charset="utf-8">
<meta name="title" content="Accueil - les Conteuses de Pas">
<meta name="description" content="Groupe de musique et de chant tradtionnels composé de 4 femmes. Elles se produisent en Bal etpropose également des Stage de danse.">
<meta name="author" content="Guillaume MELLET">	
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://use.fontawesome.com/325310aa84.js"></script>
<script src="script/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>

<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body id="accueil">

	<section id="global-container">

		<p id="intro">Bienvenue chez... </p>

		<div id="fond-logo-titre">
			<span id="logo-titre"></span>	
		</div>

		<section id="inner-container" class="clear">

			<p id="work">Le site complet est en plein chantier, il arrivera bientôt !</p>

			<span class="borderLeft green left mobile">En attendant son arrivée, vous pouvez retrouver les paroles de nos morceaux.</span>
			<span class="right dL mobile"><a href="/CDP/paroles.php" class="green">C'est par ici ></a></span>

			<div class="clear"></div>

			<p>Vous pouvez également nous confier votre email, nous pourrons ainsi vous informer sur :</p>


			<ul>
				<li class="blue">Nos évènements à venir,</li>
				<li class="orange">La sortie de notre disque,</li>
				<li class="green">L'ouverture de notre site !</li>
			</ul>


			<form id="mailForm" class="borderLeft pink clear" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<span>Pour vous inscrire c'est ici : </span>
				<span class="fLeft"><input type="text" class="pink" name="mail" value="" placeholder="Renseignez votre adresse email" required></span>
				<span class="fRight"><input type="submit" class="pink" name="send" value="Je m'inscris !"></span>
			</form>

			<? if($response != null) { ?>
			<p id="response" class="<? echo ($success === TRUE) ? 'success' : 'failure' ?>">
				<? echo $response; ?>
			</p>
			<? } ?>

			<p>On espère vous (re)croiser bientôt au cours d'un Bal ou d'un Stage,</p>

			<p>Les Conteuses</p>

		</section>
		
	</section>

</body>
</html>