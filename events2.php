<?php 
include('backend/insertMail.php'); 

// Define variables for SEO
$pageTitle = 'Nos évènements | Les conteuses de pas';
$pageDescription = 'Nous jouons à travers la France et en Europe, où la musique nous porte. Trouvez ici nos prochaines dates et venez partager de beaux moments avec nous !';
$pageCanonical = 'http://www.lesconteusesdepas.fr/evenements';
// We don't want the search engines to see our website just yet
$pageRobots = 'index,follow';

//Define active page
$page = 'DATES';
 
// Include header file
include('header.php'); 

?>

	<div id="global-container" class="events">

		<h1>Nos dates</h1>

		<div class="month active">
			<p class="month">Février</p>
			<p class="year">2018</p>
		</div>

 		<div class="event past">
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">bal</li>
 					<li class="hourEvent">19:30</li>
 				</ul>
 				<h2>La Bourrache</h2>
 				<a href="https://goo.gl/maps/3jDT44YSwG32" title="Plan vers le bal de la bourrache avec les conteuses de pas" target="_blank" class="address">Théatre de verre, 12 rue Henri Ribière, Paris 19</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="https://goo.gl/maps/3jDT44YSwG32" target="_blank" title="Plan vers le bal de la bourrache avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 					<li><a href="https://www.facebook.com/events/1767940373511299/" target="_blank" title="Bal de la bourrache avec les conteuses de pas" class="eventIcon fab fa-facebook-f"></a></li>
 				</ul>
 			</section>
 			<div id="pastEvent"></div>
 		</div>
 		<div class="clear"></div>

 		<div class="event past">
 			<section class="date blue left">
				<p class="day">09</p> 
				<p class="month">mars</p>
				<p class="year">2018</p>
			</section>
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">bal</li>
 					<li class="hourEvent">20:30</li>
 				</ul>
 				<h2>La Péniche Demoiselle</h2>
 				<a href="https://goo.gl/maps/5yMBetWLjf22" target="_blank" title="Plan vers le bal de la Péniche Demoiselle avec les conteuses de pas" class="address">57 Quai de la Seine, Paris 19</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="http://www.peniche-demoiselle.com/musique.html" target="_blank" title="Programmation de la Péniche Demoiselle" class="eventIcon fas fa-external-link-square-alt"></a></li>
 					<li><a href="https://goo.gl/maps/5yMBetWLjf22" target="_blank" title="Plan vers le bal de la Péniche Demoiselle avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 					<li><a href="https://www.facebook.com/events/178476826257607/" target="_blank" title="Bal de Péniche Demoiselle avec les conteuses de pas" title="évènement facebook - organisateur" class="eventIcon fab fa-facebook-f"></a></li>
 				</ul>
 			</section>
 		</div>
 		<div class="clear"></div>

 		<div class="event incoming">
 			<section class="date blue left">
				<p class="day">26</p> 
				<p class="month">mai</p>
				<p class="year">2018</p>
			</section>
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">bal</li>
 					<li class="typeEvent">fest-deiz</li>
 					<li class="hourEvent">à partir de 12:00</li>
 				</ul>
 				<h2>Fest-deiz de la Saint Yves</h2>
 				<a href="https://goo.gl/maps/CZHmidzd7vy" target="_blank" title="Plan vers le Fest-deiz de la Saint-Yves avec les conteuses de pas" class="address">Parvis de la Mairie du XIVe arrondissement, 75014 Paris</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="https://www.missionbretonne.bzh/12268/grande-journee-festive-marche-et-fest-deiz/" target="_blank" title="Fest-deiz de la Saint-Yves avec les Conteuses de Pas" class="eventIcon fas fa-external-link-square-alt"></a></li>
 					<li><a href="https://goo.gl/maps/CZHmidzd7vy" target="_blank" title="Plan vers le Fest-deiz de la Saint-Yves avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 				</ul>
 			</section>
 		</div>
 		<div class="clear"></div>

 		<div class="event incoming">
 			<section class="date orange left">
				<p class="day">14</p> 
				<p class="month">juin</p>
				<p class="year">2018</p>
			</section>
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">concert</li>
 					<li class="hourEvent">20:30</li>
 				</ul>
 				<h2>Les Damoiselles</h2>
 				<a href="https://goo.gl/maps/avtXXDbboND2" target="_blank" title="Plan vers le bal de Tanz+Folk! avec les conteuses de pas" class="address">656 Chemin des Damoiselles, 59850 Nieppe</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="http://www.damoiselles.com/" target="_blank" title="L'estaminet les Damoiselles accueil les Conteuses de Pas pour un concert." class="eventIcon fas fa-external-link-square-alt"></a></li>
 					<li><a href="https://goo.gl/maps/avtXXDbboND2" target="_blank" title="Plan vers le bal de Tanz+Folk! avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 					<li><a href="https://www.facebook.com/events/1804801346487506/" target="_blank" title="Concert chez les damoiselles à Nieppe avec les conteuses de pas" class="eventIcon fab fa-facebook-f"></a></li>
 				</ul>
 			</section>
 		</div>
 		<div class="clear"></div>

 		<div class="event incoming">
 			<section class="date pink left">
				<p class="day">16</p> 
				<p class="month">juin</p>
				<p class="year">2018</p>
			</section>
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">bal</li>
 					<li class="hourEvent">20:00</li>
 				</ul>
 				<h2>Tanz+Folk!</h2>
 				<a href="https://goo.gl/maps/T2FSZN54sGE2" target="_blank" title="Plan vers le bal de Tanz+Folk! avec les conteuses de pas" class="address">Laerheidestraße 26B, 44799 Bochum, Germany</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="https://www.folkfreun.de/tanz-folk.html" target="_blank" title="Das Bochumer Balflok-Event! - Gastband: Les Conteuses de Pas" class="eventIcon fas fa-external-link-square-alt"></a></li>
 					<li><a href="https://goo.gl/maps/T2FSZN54sGE2" target="_blank" title="Plan vers le bal de Tanz+Folk! avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 				</ul>
 			</section>
 		</div>
 		<div class="clear"></div>

 		<div class="event incoming">
 			<section class="date green left">
				<p class="day">09</p> 
				<p class="month">août</p>
				<p class="year">2018</p>
			</section>
 			<section class="detail">
 				<ul class="event">
 					<li class="typeEvent">concert</li>
 					<li class="typeEvent">bal</li>
 					<li class="hourEvent">19:00</li>
 				</ul>
 				<h2>46e Festival de Montoire</h2>
 				<a href="https://goo.gl/maps/UhEw8kNxVco" target="_blank" title="Plan vers le bal de Tanz+Folk! avec les conteuses de pas" class="address">Mairie, Place Clémenceau, 41800 Montoire-sur-le-Loir</a>
 			</section>
 			<section id="eventLinks">
 				<ul>
 					<li><a href="http://www.festival-montoire.com/index.php?option=com_content&view=article&id=334&Itemid=671&lang=fr" target="_blank" title="Festival de Montoire avec les Conteuses de Pas en avant-scène" class="eventIcon fas fa-external-link-square-alt"></a></li>
 					<li><a href="https://goo.gl/maps/UhEw8kNxVco" target="_blank" title="Plan vers le festival de Montoire avec les conteuses de pas" class="eventIcon fas fa-map-marker"></a></li>
 				</ul>
 			</section>
 		</div>
 		<div class="clear"></div>
		
		
	</div>

<?php
include('footer.php');
?>