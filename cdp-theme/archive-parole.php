<?php get_header(); ?>
	<h1>Textes et sources des morceaux</h1>

<?php
$albums = get_terms( array(
    'taxonomy' => 'album',
    'hide_empty' => true,
) );

foreach ( $albums as $album ):
    $ID = $album->term_id;
?>

    <h2 class="lyric__album"><?php echo $album->name; ?></h2>

<?php
    $the_query = new WP_Query(
        array(
            'post_type' => 'parole',
            'posts_per_page'	=> -1,
            'meta_key'			=> 'numero_de_piste',
            'orderby'			=> 'meta_value',
          'order'				=> 'ASC',
            'tax_query' => array(
                    array(
                        'taxonomy' => 'album',
                        'field'    => 'term_id',
                        'terms'    => $ID,
                    ),
                ),
        )
    );

    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) :
            $the_query->the_post();
?>

            <article class="lyric">
                <a class="lyric__link" href="<?php echo get_field('lien_du_pdf'); ?>">
                    <span class="visually-hidden">Télécharger les paroles de <span lang="<?php echo get_field('langue'); ?>">"<?php echo get_the_title(); ?>"</span></span>
                    <span role="presentation">></span>
                </a>
                <p class="lyric__trackNumber"><?php echo get_field('numero_de_piste'); ?></p>
                <div class="lyric__information">
                    <h3 class="lyric__name" lang="<?php echo get_field('langue'); ?>"><?php echo get_the_title(); ?></h3>
                    <p class="lyric__dance"><?php echo get_field('danse'); ?></p>
                </div>
            </article>

            <?php
        endwhile; endif;
endforeach;
?>
