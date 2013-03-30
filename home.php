<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * Note: You can overwrite home.php as well as any other Template in Child Theme.
 * Create the same file (name) include in /responsive-child-theme/ and you're all set to go!
 * @see            http://codex.wordpress.org/Child_Themes
 *
 * @file           home.php
 * @package        Responsive
 * @subpackage     Jyvioni-2013
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/home.php
 * @link           http://codex.wordpress.org/Template_Hierarchy
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="featured" class="grid col-940">

        <div class="grid col-460">

            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if ($options['home_headline']) {
                    echo '<h1 class="featured-title">';
				    echo $options['home_headline'];
				    echo '</h1>';
			// If not display dummy headline for preview purposes
			      } else {
			        echo '<h1 class="featured-title">';
				    echo __('Hello, World!','responsive');
				    echo '</h1>';
				  }
			?>

            <?php $options = get_option('responsive_theme_options');
			// First let's check if headline was set
			    if ($options['home_subheadline']) {
                    echo '<h2 class="featured-subtitle">';
				    echo $options['home_subheadline'];
				    echo '</h2>';
			// If not display dummy headline for preview purposes
			      } else {
			        echo '<h2 class="featured-subtitle">';
				    echo __('Your H2 subheadline here','responsive');
				    echo '</h2>';
				  }
			?>

            <?php $options = get_option('responsive_theme_options');
			// First let's check if content is in place
			    if (!empty($options['home_content_area'])) {
                    echo '<p>';
					echo do_shortcode($options['home_content_area']);
				    echo '</p>';
			// If not let's show dummy content for demo purposes
			      } else {
			        echo '<p>';
				    echo __('Your title, subtitle and this very content is editable from Theme Option. Call to Action button and its destination link as well. Image on your right can be an image or even YouTube video if you like.','responsive');
				    echo '</p>';
				  }
			?>

            <!-- </div> --><!-- end of .call-to-action -->
            <?php //endif; ?>

        </div><!-- end of .col-460 -->

        <div id="featured-image" class="grid col-460 fit">

            <?php $options = get_option('responsive_theme_options');
			// First let's check if image was set
			    if (!empty($options['featured_content'])) {
					echo do_shortcode($options['featured_content']);
		    // If not display dummy image for preview purposes
			      } else {
                    echo '<img class="aligncenter" src="'.get_stylesheet_directory_uri().'/images/featured-image.png" width="440" height="300" alt="" />';
 				  }
			?>

        </div><!-- end of #featured-image -->

        </div><!-- end of #featured -->

<?php get_sidebar('home'); ?>
<?php get_footer(); ?>