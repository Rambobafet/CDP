<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/css/images/CDP_favicon.ico" />

    <!-- TODO: still used? -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav id="navigation" aria-label="Navigation Principale">
        <a id="logo" href="<?php echo home_url( '/' ); ?>" aria-label="Conteuses de Pas - retour à l'accueil">
            <img src="<?php echo get_template_directory_uri();?>/css/images/C_logo.svg" alt="Conteuses de Pas">
        </a>
        <button class="fa fa-bars fa-lg" id="mobNavBtn" aria-expanded="false">
            Ouvrir le menu mobile
        </button>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'main',
                'menu_class' => 'desktop',
            ));
         ?>
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
    <div id="global-container">