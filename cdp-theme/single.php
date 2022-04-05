<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div id="inner-container" class="contribution">

        <?php if( have_rows('date') && have_rows('event_adress') ): ?>
        <div class="event__details">
            <div class="practicalInformation">
                <dl>
                <?php while ( have_rows('date') ) : the_row(); ?>
                    <dt class="event_detailTitle">Quand ?</dt>
                    <dd><?php echo get_sub_field('date'); ?></dd>
                    <dt class="event_detailTitle">À partir de quelle heure ?</dt>
                    <dd><?php echo get_sub_field('heure_de_debut'); ?></dd>
                <?php endwhile; ?>

                <?php while ( have_rows('event_adress') ) : the_row(); ?>
                    <dt class="event_detailTitle">À quelle adresse ?</dt>
                    <dd><?php echo get_sub_field('nom'); ?><br/>
                        <?php echo get_sub_field('adresse'); ?><br/>
                        <?php echo get_sub_field('code_postal'); ?> <?php echo get_sub_field('ville'); ?><br/>
                        <?php echo get_sub_field('pays'); ?></dd>
                <?php endwhile; ?>
                </dl>
            </div>
            <div class="event_poster">
                <?php echo get_the_post_thumbnail($post_id, 'medium') ?>

                <?php if (have_rows('liens')): ?>
                    <?php /* var_dump(get_field('liens')); */ ?>

                    <?php while ( have_rows('liens') ) : the_row(); ?>
                        <figure>
                        <figcaption>Les liens utiles :</figcaption>
                        <ul>
                            <li><a href="<?php echo get_sub_field('site_web'); ?>" target="_blank" rel="noopener noreferrer">Site web</a></li>
                            <li><a href="<?php echo get_sub_field('facebook'); ?>" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                            <li><a href="<?php echo get_sub_field('youtube'); ?>" target="_blank" rel="noopener noreferrer">Youtube</a></li>
                        </ul>
                        </figure>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php ?>
            </div>
        <?php endif; ?>

        <?php the_content(); ?>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>