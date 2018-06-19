<?php 
include('backend/insertMail.php');

// Define variables for SEO
$pageTitle = 'Présentation du groupe | Les conteuses de pas';
$pageDescription = 'C\'est pour une scène partagée que les Conteuses de Pas se sont formées en 2014. Elles avaient réuni voix, vielle à roue, harpe et percussions, pour le temps d\'un bal... mais se sont tant amusées à faire de la musique ensemble qu\'elles ont continué sur cette lancée, avec beaucoup d\'enthousiasme et de bonheur.';
$pageCanonical = 'http://www.lesconteusesdepas.fr/';
// We don't want the search engines to see our website just yet
$pageRobots = 'index,follow';

//Define active page
$page = 'PRESENTATION';
 
// Include header file
include('header.php'); 
?>

	<div id="global-container" class="presentation">

		<h1>Présentation</h1>

		
 		<section id="group">
 			<h2 class="pink">Le Groupe</h2>
 			<p>C'est pour une scène partagée que les Conteuses de Pas se sont formées en 2014. Elles avaient réuni voix, vielle à roue, harpe et percussions, pour le temps d'un bal... mais se sont tant amusées à faire de la musique ensemble qu'elles ont continué sur cette lancée, avec beaucoup d'enthousiasme et de bonheur.</p>
 			<p>Issues chacune d’horizons musicaux très différents, du classique au jazz en passant par la tradition orale et la musique du monde, elles trouvent dans le dialogue de leurs influences, une nouvelle matière musicale à travailler ensemble.</p>
 		</section>

 		<section id="members">

 			<h2 class="green">Les Membres</h2>
 			
 			<div id="presentation">
 				<img src="css/images/Marion_CDP.jpg">
 				<h3 class="pink">Marion Blanchard</h3>
 				<p>Après une première approche du chant dans l’enfance au sein d’une chorale généraliste, elle s’oriente à l’adolescence vers le jazz qu’elle pratiquera quelques années. Un nouveau changement d’orientation l’amènera à l’âge adulte simultanément vers le chant d’Inde du Nord et le chant traditionnel, deux univers bien plus proche qu’on ne le croit.</p>
 			</div>
 			<div class="clear"></div>

 			<div id="presentation">
 				<h3 class="green">Virgilia Gacoin</h3>
 				<p>Intéressée depuis l’enfance par la musique ancienne et les modes d’expressions traditionnels, il lui faudra la découverte des veillées de chant pour se lancer finalement dans une pratique régulière qu’elle afinera à l’aide de stages avec des passeurs de mémoires et l’écoute de nombreux collectages. Attirée par le blues et les sons frottants, elle en parsème sans remords ses arrangements.</p>
 				<img src="css/images/virgi_CDP.jpg">
 			</div>
 			<div class="clear"></div>

 			<div id="presentation">
 				<img src="css/images/Coco_CDP.jpg">
 				<h3 class="orange">Coraline Loiseau</h3>
 				<p>Son premier contact avec la musique sera le piano. Mais à 10 ans, elle se tourne vers la vielle à roue. Un choix pas si surprenant dans son Berry natal, dont l’instrument est l’emblème, et où les bals folks font partie du décor. Son apprentissage se fait en parallèle au conservatoire classique, et « sur le terrain » dans les bœufs où l’on se forge un répertoire à l’oreille. Elle chante depuis longtemps, principalement en faisant la vaisselle, mais c’est avec les Conteuses de Pas qu’elle commencera à donner de la voix en public.</p>
 			</div>
 			<div class="clear"></div>
 			
 			<div id="presentation">
 				<h3 class="blue">Clémence Moiron</h3>
 				<p>Sa première approche de la harpe se fait par l’apprentissage de la harpe classique. Mais son désir de jouer avec d’autres se heurte aux dimensions de l’instrument, ce qui l’amène à choisir la harpe bohémienne, à l’ambitus équivalent à celui de la harpe celtique mais légère et transportable. Sa découverte des musiques traditionnelles italiennes la lance dans le domaine du chant et de l’accompagnement, convertissant la harpe en un instrument aussi rythmique qu’il est naturellement mélodique.</p>
 				<img src="css/images/Clemence_CDP.jpg">
 			</div>
 			<div class="clear"></div>

 		</section>
		
		
	</div>

<?php
include('footer.php');
?>