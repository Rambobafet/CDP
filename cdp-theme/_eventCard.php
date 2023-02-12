<?php
$address = '';
$formatted = '';
$startAt = '';
$web = '';
$isAccessibleForFree = false;
$private = "false";
?>
<article class="event event--incoming">
    <?php if( have_rows('date') ): ?>
        <?php while ( have_rows('date') ) : the_row();
            $private = get_sub_field('evenement_prive');
            $isAccessibleForFree = get_sub_field('evenement_gratuit') ? "true" : "false";
            $splitted = str_split(get_sub_field('event_date'), 2);
            $formatted = $splitted[0].$splitted[1].'-'.$splitted[2].'-'.$splitted[3];
            $date = date_create($formatted);
        ?>
        <time class="event__date" datetime="<?php echo $formatted; ?>">
        <?php
            echo $fmt->format($date); ?>
        </time>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="event__information">
        <ul class="event__tags">
            <?php if( have_rows('date') ): ?>
                <?php while ( have_rows('date') ) : the_row(); ?>
                    <?php if(!$private):
                        $startAt = get_sub_field('heure_de_debut');
                    ?>
                        <li class="event__tagsItem"><time><?php the_sub_field('heure_de_debut'); ?></time></li>
                    <?php endif; ?>
                <?php
                endwhile;
            endif;
            $tags = get_the_tags();
            if ($tags) {
              foreach($tags as $tag) {
                echo '<li class="event__tagsItem">'.$tag->name.'</li>';
              }
            }
            ?>
        </ul>
        <h3 class="event__name"><?php the_title(); ?></h3>
        <?php
        if( have_rows('event_adress') ): ?>
        <?php while ( have_rows('event_adress') ) : the_row();

         $address = get_sub_field('adresse');

         ?>
            <div>
            <p class="event__address">
                <?php echo $address; ?>
            </p>
            </div>
            <?php endwhile; ?>
        <?php endif ?>
    </div>
    <?php if(!$private): ?>
    <ul class="event__links">
    <?php if( have_rows('liens') ): ?>
            <?php while ( have_rows('liens') ) : the_row();

            $web = get_sub_field('site_web');
            $facebook = get_sub_field('facebook');
            ?>
                <?php if(!empty($web)) : ?>
                    <li>
                        <a href="<?php the_sub_field('site_web'); ?>" rel="noopener noreferrer" target="_blank" title="Site web de l'événement" class="eventIcon fas fa-external-link-square-alt">
                            <span class="a11y-hidden">Site web de l'événement</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if(!empty($address)): ?>
                <li>
                    <a href="https://www.google.com/maps/search/<?php echo str_replace(' ', '+', $address); ?>" rel="noopener noreferrer" target="_blank" title="Plan Google Maps" class="eventIcon fas fa-map-marker">
                        <span class="a11y-hidden">Plan Google maps</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if(!empty($facebook)): ?>
                <li>
                    <a href="<?php the_sub_field('facebook'); ?>" rel="noopener noreferrer" target="_blank" title="Événement Facebook" class="eventIcon fab fa-facebook-f">
                        <span class="a11y-hidden">Événement Facebook</span>
                    </a>
                </li>
                <?php endif; ?>
            <?php
            endwhile;
        endif;
        ?>
    </ul>
    <?php endif; ?>
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Event",
          <?php if ($tags) {
          echo '"keywords": "';
                foreach($tags as $tag) {
                  echo $tag->name.',';
                }
          echo '",';
          }
          ?>
          "location": "<?php echo $address; ?>",
          "name": "<?php the_title() ?>",
          "startDate": "<?php echo $formatted; ?>T<?php echo $startAt; ?>",
          "eventAttendanceMode": "offline",
          "performer": "Les Conteuses de Pas",
          "isAccessibleForFree": "<?php echo $isAccessibleForFree ?>",
          "organizer": {
            "@type": "Organization",
            "sameAs": "<?php echo $web; ?>"
          }
        }
        </script>
</article>
