<?php get_header(); ?>
	<h1>Paroles</h1>

	/*
	1. Get categories used by "parole" post type
	2. Loop in each categories
	3. order each item by song number (asc)
	4. loop in ordered song
	*/

	<?php
        $cats = get_categories(
            array(
                'taxonomy' => 'parole',
                'orderby' => 'name',
                'order'   => 'ASC'
            )
        );

       foreach($cats as $cat) {

        $args = array('post_type' => 'parole', 'posts_per_page' => -1, 'cat' => $cat->ID);
        $loop = new WP_Query($args);
        if ($loop->have_posts()):
        ?>

        <h2><?php $cat->the_title()?></h2>
        <ol>

        <?php

            $orderedLyrics = usort($loop, function ($item1, $item2) {
                return $item1['numero_de_piste'] <=> $item2['numero_de_piste'];
            });

            foreach ($orderedLyrics as $lyric) :
                var_dump($lyric);
            ?>
                <li>
                    <a href="paroles/1-ah-si-tu-amusons-nous.pdf" target="_blank" rel="noopener noreferrer" class="paroles"  title="Télécharger le PDF : <?php <?php echo $lyric['title']; ?> ?>">
                        <span class="nbrs"><?php echo $lyric['numero_de_piste']; ?></span>
                        <span class="pInfo">
                            <h3 lang="<?php echo $lyric['lang']; ?>"><?php echo $lyric['title']; ?></h3>
                            <p class="left"><?php echo $lyric['dance']; ?></p>
                            <p class="right">04:21</p>
                        </span>
                    </a>
                </li>
        <?php
            endforeach;
        endif;
       ?>
    </ol>

<?php get_footer(); ?>