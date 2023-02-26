<?php
$today = intval((date("Ymj")), 10);
$paged = (get_query_var('page')) ? get_query_var('page') : 1;

$fmt = datefmt_create(
    "fr-FR",
    IntlDateFormatter::MEDIUM,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

get_header();
?>

<div class="category__header">
    <h1><?php single_cat_title(''); ?></h1>
    <div class="category__description"><?php echo category_description(); ?></div>
</div>

<section class="event__section event__section--future">
    <h2 class="event__heading">Dates à venir</h2>
    <?php
    $wp_query = new WP_Query(array( // the query
        'post_type' => 'post',
            'posts_per_page' => 10,
            'meta_key' => 'date_event_date',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'meta_query' => array(
                array(
                   'key' => 'date_event_date',
                   'value' => $today,
                   'compare' => '>=',
               )
            )
    ));

    if($wp_query->have_posts() && intval($paged, 10) == 1):
        while ($wp_query->have_posts()) : $wp_query->the_post();
            include get_template_directory() . '/_eventCard.php';
        endwhile;
    else:
        if  (intval($paged, 10) === 1):
            echo '<div class="category__description"> Oh no, il semblerait qu\'aucune date ne soit encore prévu. Vite vite <a href="/contact">contactez nous</a> :D</div>';
        endif;
    endif;
    ?>
</section>
<section class="event__section event__section--passed">
    <h2 class="event__heading">Dates passées</h2>
    <?php
    wp_reset_query();

    $wp_queryArchives = new WP_Query(array( // the query
        'paged' => $paged,
        'post_type' => 'post',
        'posts_per_page' => 10,
        'meta_key' => 'date_event_date',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'meta_query' => array(
                    array(
                       'key' => 'date_event_date',
                       'value' => $today,
                       'compare' => '<=',
                   )
                )
    ));

    while ($wp_queryArchives->have_posts()) : $wp_queryArchives->the_post();
        include get_template_directory() . '/_eventCard.php';
    endwhile; ?>

    <div class="pagination">
        <?php echo ( paginate_links($args = array(
        'format'       => '?page=%#%',
        'total'        => $wp_queryArchives->max_num_pages,
        'current'      => $paged,
        'show_all'     => false,
        'end_size'     => 2,
        'mid_size'     => 2,
        'prev_next'    => true,
        'prev_text'    => 'Précédent',
        'next_text'    => 'Suivant',
        'type'         => 'list',
        'add_args'     => false,
        'add_fragment' => ''
         )));
         ?>
    </div>
</section>

<?php
wp_reset_query();
get_footer();
?>