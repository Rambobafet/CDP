<?php 
include('backend/insertMail.php');

// Define variables for SEO
$pageTitle = 'Nos chansons | Les conteuses de pas';
$pageDescription = 'Retrouvez ici tous les textes et toutes les sources des morceaux de notre dernier album.';
$pageCanonical = 'http://www.lesconteusesdepas.fr/nos-chansons';
// We don't want the search engines to see our website just yet
$pageRobots = 'index,follow';

//Define active page
$page = 'PAROLES';
 
// Include header file
include('header.php'); 

?>

	<div id="global-container" class="paroles">

		<h1>Textes et sources des morceaux</h1>

		<h2 class="orange">Profitons des Beaux Jours</h2>
	
		<a href="paroles/1-ah-si-tu-amusons-nous.pdf" target="_blank" class="paroles green">
			<span class="nbrs">01</span>
			<span class="pInfo">
				<h3>Ah si tu m'abandonnes - Amusons-nous fillette</h3>
				<h4 class="left">Bourrée à 3 temps</h4>
				<h5 class="right">04:21</h5>
			</span>
		</a>

		<a href="paroles/2-une-fillette-pelote.pdf" target="_blank" class="paroles blue">
			<span class="nbrs">02</span>
			<span class="pInfo">
				<h3>Une fille à 14 ans - La pelote à Marion</h3>
				<h4 class="left">Valse à 3 temps</h4>
				<h5 class="right">04:21</h5>
			</span>
		</a>

		<a href="paroles/4-par-derriere.pdf" target="_blank" class="paroles orange">
			<span class="nbrs">04</span>
			<span class="pInfo">
				<h3 class="uL">Par derrière notre maison</h3>
				<h4 class="left">Ronde à 3 pas du pays de Caux</h4>
				<h5 class="right">03:41</h5>
			</span>
		</a>

		<a href="paroles/5-cueillir-la-rose.pdf" target="_blank" class="paroles pink">
			<span class="nbrs">05</span>
			<span class="pInfo">
				<h3 class="uL">Cueillir la rose</h3>
				<h4 class="left">Mazurka</h4>
				<h5 class="right">05:31</h5>
			</span>
		</a>

		<a href="paroles/6-dans-paris.pdf" target="_blank" class="paroles green">
			<span class="nbrs">06</span>
			<span class="pInfo">
				<h3 class="uL">Dans Paris</h3>
				<h4 class="left">Scottish</h4>
				<h5 class="right">05:14</h5>
			</span>
		</a>

		<a href="paroles/7-de-bon-matin.pdf" target="_blank" class="paroles blue">
			<span class="nbrs">07</span>
			<span class="pInfo">
				<h3 class="uL">De bon matin</h3>
				<h4 class="left">Rond d'Argenton</h4>
				<h5 class="right">04:49</h5>
			</span>
		</a>

		<a href="paroles/9-derriere-de-chez.pdf" target="_blank" class="paroles orange">
			<span class="nbrs">09</span>
			<span class="pInfo">
				<h3 class="uL">Derrière chez mon père</h3>
				<h4 class="left">Polka</h4>
				<h5 class="right">04:39</h5>
			</span>
		</a>

		<a href="paroles/10-le-doute-et-le-demon.pdf" target="_blank" class="paroles pink">
			<span class="nbrs">10</span>
			<span class="pInfo">
				<h3 class="uL">Le doute et le démon</h3>
				<h4 class="left">Gavotte de Grenoble</h4>
				<h5 class="right">05:09</h5>
			</span>
		</a>

		<a href="paroles/11-se-ieu.pdf" target="_blank" class="paroles green">
			<span class="nbrs">11</span>
			<span class="pInfo">
				<h3 class="uL">Se ieu Sabia</h3>
				<h4 class="left">Valse à 3 temps</h4>
				<h5 class="right">04:35</h5>
			</span>
		</a>

		<a href="paroles/12-mon-pere-il-veut.pdf" target="_blank" class="paroles blue">
			<span class="nbrs">12</span>
			<span class="pInfo">
				<h3>Mon père il veut m'y marier</h3>
				<h4 class="left">Pilé-menu</h4>
				<h5 class="right">05:32</h5>
			</span>
		</a>

		<a href="paroles/13-a-la-claire.pdf" target="_blank" class="paroles orange">
			<span class="nbrs">13</span>
			<span class="pInfo">
				<h3 class="uL">&Agrave; la claire fontaine</h3>
				<h4 class="left">Hanter dro</h4>
				<h5 class="right">03:58</h5>
			</span>
		</a>
		
	</div>

<?php
include('footer.php');
?>