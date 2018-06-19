<?php include('backend/insertMail.php'); ?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>

<title><?php echo $pageTitle; ?></title>
<meta charset="utf-8">
<meta name="title" content="<?php echo $pageTitle; ?>" >
<meta name="description" content="<?php echo $pageDescription; ?>">
<?php
// If canonical URL is specified, include canonical link element
if($pageCanonical){
echo '<link rel="canonical" href="'.$pageCanonical.'">';
}
// If meta robots content is specified, include robots meta tag
if($pageRobots){
echo '<meta name="robots" content="'.$pageRobots.'">';
}
?>
<meta name="author" content="Guillaume MELLET"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="css/images/CDP_favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

<!-- <script src="https://use.fontawesome.com/325310aa84.js"></script>
<script defer src="script/fontawesome-all.min.js"></script> -->
<script src="script/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="script/player.js" type="text/javascript" charset="utf-8"></script>
<script src="script/toolkit.js" type="text/javascript" charset="utf-8"></script>

<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

</head>
<body id="player">
    <nav id="navigation">
        <a id="logo" href="/index.php"><img src="css/images/C_logo.svg" alt="logo abrégé conteuses"></a>
        <a class="fa fa-bars fa-lg" id="mobNavBtn"></a>
        <ul class="desktop">
            <!-- <li><a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li> -->
            <li <?php if($page=='PRESENTATION'){echo 'class="active"';} ?>><a href="/index.php" class="torange">présentation</a></li>
            <li <?php if($page=='DATES'){echo 'class="active"';} ?>><a href="/events.php" class="tgreen">dates</a></li>
            <!-- <li <?php if($page=='DISQUE'){echo 'class="active"';} ?>><a href="#" class="tblue">disque</a></li> -->
            <li <?php if($page=='PAROLES'){echo 'class="active"';} ?>><a href="/paroles.php" class="tpink">paroles</a></li>
            <li <?php if($page=='CONTACT'){echo 'class="active"';} ?>><a href="/contact.php" class="tblue">contact</a></li>
        </ul>
        <div id="player">
            <span id="npTitle"></span>
            <a id="btnPrev" class="disabled fas fa-step-backward "></a>
            <a class="fas fa-play right" id="btnPlayPause"></a>
            <a id="btnNext" class="fas fa-step-forward "></a>
        </div>
        <div id="mobNavScn" class="hidden">
            <div id="mobNavHead">
                <span id="menuTitle">Menu</span>
                <span id="mobNavClose" class="close">fermer</span>
            </div>
            <div id="mobNavRightPanel">
                <ul id="social">
                    <li id="facebook"><a href="https://www.facebook.com/lesconteusesdepas/" title="Page facebook Conteuses de Pas" class="fab fa-facebook-f"></a></li>
                    <li id="soundcloud"><a href="https://soundcloud.com/user-834019076" title="Chaine soundcloud Conteuses de Pas" class="fab fa-soundcloud"></a></li>
                    <li id="auvergne"><a href="http://phonolithe.fr/boutique/disques/1021-les-conteuses-de-pas-profitons-des-beaux-jours.html" title="Télécharger l'album des Conteuses de Pas sur Phonolithe" class="aDiff">P</a></li>
                </ul>
                <section id="events"></section>
            </div>
            <div class="menuPlayer">
                <div id="plwrap">
                    <ul id="plList">
                        <li>
                            <div class="plItem">
                                <div class="plNum">01.</div>
                                <div class="plTitle">Cueillir la Rose</div>
                                <div class="plLength">5:30</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">02.</div>
                                <div class="plTitle">Dans Paris</div>
                                <div class="plLength">5:38</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">03.</div>
                                <div class="plTitle">Ronde à 3 pas</div>
                                <div class="plLength">3:41</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">04.</div>
                                <div class="plTitle">Se ieu Sabia</div>
                                <div class="plLength">5:11</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="audiomenu">
                    <audio preload id="audio1" class="audio" controls controlsList="nodownload">Your browser does not support HTML5 Audio!</audio>
                </div>
            </div>
        </div>
    </nav>