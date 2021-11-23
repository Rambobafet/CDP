<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h1 class="home__title">
            <img class="home__nameImage" src="<?php bloginfo('template_url'); ?>/css/images/CDP-logo-titre_white.svg" alt="Les conteuses de Pas..." />
        </h1>
        <?php echo get_the_post_thumbnail(); ?>

        <div id="inner-container" class="contribution">
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
<?php get_footer(); ?>