<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Homepage Posts Template
 *
 *
 * @file           homepage-posts.php
 * @package        Jyvioni-2013
 * @author         Janne Saarela
 * @version        Release: 1.0
 * @filesource     wp-content/themes/jyvioni-responsive-child-theme/homepage-posts.php
 * @since          available since Release 1.0
 */
?>
<?php
  $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3));
  if($query->have_posts()) :
    while($query->have_posts()) : $query->the_post();
    ?>
      <article class="post-<?php the_ID();?> grid-50-with-gap">
        <a href="<?php echo get_permalink(); ?>" title="<?php the_title() ?>">
          <h1><?php the_title() ?></h1>
          <div class='post-content'>
            <?php the_excerpt(); ?>
          </div>
        </a>
      </article>
  <?php
    endwhile;
  endif;
?>