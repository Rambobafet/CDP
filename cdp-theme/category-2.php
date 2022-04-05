<?php get_header(); ?>
	<div class="category__header">
	    <h1><?php single_cat_title(''); ?></h1>
        <div class="category__description"><?php echo category_description(); ?></div>
	</div>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="lyric">
            <a class="lyric__link" href="<?php echo get_permalink(); ?>">
                <span class="visually-hidden"><?php the_title(); ?></span>
                <span role="presentation">></span>
            </a>
            <p class="lyric__trackNumber">
            <?php if( have_rows('date') ): ?>
                <?php while ( have_rows('date') ) : the_row(); ?>
                    <?php echo get_sub_field('date'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </p>
            <div class="lyric__information">
                <h3 class="lyric__name" lang="<?php echo get_field('langue'); ?>"><?php echo get_the_title(); ?></h3>
                <?php
                if( have_rows('event_adress') ): ?>
                <?php while ( have_rows('event_adress') ) : the_row(); ?>
                    <pre>
<?php echo get_sub_field('nom'); ?>&nbsp;
<?php echo get_sub_field('adresse'); ?>, <?php echo get_sub_field('code_postal'); ?> <?php echo get_sub_field('ville'); ?> - <?php echo get_sub_field('pays'); ?>
                    </pre>
                    <?php endwhile; ?>
                <?php endif ?>
            </div>
        </article>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>