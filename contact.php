<?php 
include('backend/insertMail.php'); 

// Define variables for SEO
$pageTitle = 'Nous contacter | Les conteuses de pas';
$pageDescription = '';
$pageCanonical = 'http://www.lesconteusesdepas.fr/contact';
// We don't want the search engines to see our website just yet
$pageRobots = 'index,follow';

//Define active page
$page = 'CONTACT';
 
// Include header file
include('header.php'); 

?>

	<div id="global-container" class="contact">

		<h1>Nous contacter</h1>

		<p>Pour toute information complémentaire, pour nous faire jouer ou nous crier votre amour</p>

		<p>Contactez-nous à : <a href="mailto:contact@lesconteusesdepas.fr" class="tpink">contact@lesconteusesdepas.fr</a></p>
 		
		
		
	</div>

<?php
include('footer.php');
?>