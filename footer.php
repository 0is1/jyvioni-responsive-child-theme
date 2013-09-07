<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @subpackage     Jyvioni-2013
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">

    <div id="footer-wrapper">

        <div class="grid col-940">

        <div class="grid col-540">
    <?php if (has_nav_menu('footer-menu', 'responsive')) { ?>
          <?php wp_nav_menu(array(
            'container'       => '',
          'fallback_cb'   =>  false,
          'menu_class'      => 'footer-menu',
          'theme_location'  => 'footer-menu')
          );
        ?>
         <?php } ?>
         </div><!-- end of col-540 -->

         <div class="grid col-380 fit">
         <?php $options = get_option('responsive_theme_options');

            // First let's check if any of this was set

                echo '<ul class="social-icons">';

                if (!empty($options['twitter_uid'])) echo '<li class="twitter-icon"><a href="' . $options['twitter_uid'] . '">'
                    .'<img title="Twitter – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/twitter-icon.png" width="48" height="48" alt="Twitter">'
                    .'</a></li>';

                if (!empty($options['facebook_uid'])) echo '<li class="facebook-icon"><a href="' . $options['facebook_uid'] . '">'
                    .'<img title="Facebook – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/facebook-icon.png" width="48" height="48" alt="Facebook">'
                    .'</a></li>';

                if (!empty($options['linkedin_uid'])) echo '<li class="linkedin-icon"><a href="' . $options['linkedin_uid'] . '">'
                    .'<img title="LinkedIn – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/linkedin-icon.png" width="48" height="48" alt="LinkedIn">'
                    .'</a></li>';

                if (!empty($options['youtube_uid'])) echo '<li class="youtube-icon"><a href="' . $options['youtube_uid'] . '">'
                    .'<img title="YouTube – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/youtube-icon.png" width="48" height="48" alt="YouTube">'
                    .'</a></li>';

                if (!empty($options['stumble_uid'])) echo '<li class="stumble-upon-icon"><a href="' . $options['stumble_uid'] . '">'
                    .'<img title="StumbleUpon – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/stumble-upon-icon.png" width="48" height="48" alt="StumbleUpon">'
                    .'</a></li>';

                if (!empty($options['rss_uid'])) echo '<li class="rss-feed-icon"><a href="' . $options['rss_uid'] . '">'
                    .'<img title="RSS – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/rss-feed-icon.png" width="48" height="48" alt="RSS Feed">'
                    .'</a></li>';

                if (!empty($options['google_plus_uid'])) echo '<li class="google-plus-icon"><a href="' . $options['google_plus_uid'] . '">'
                    .'<img title="Google+ – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/googleplus-icon.png" width="48" height="48" alt="Google Plus">'
                    .'</a></li>';

                if (!empty($options['instagram_uid'])) echo '<li class="instagram-icon"><a href="' . $options['instagram_uid'] . '">'
                    .'<img title="Instagram – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/instagram-icon.png" width="48" height="48" alt="Instagram">'
                    .'</a></li>';

                if (!empty($options['pinterest_uid'])) echo '<li class="pinterest-icon"><a href="' . $options['pinterest_uid'] . '">'
                    .'<img title="Pinterest – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/pinterest-icon.png" width="48" height="48" alt="Pinterest">'
                    .'</a></li>';

                if (!empty($options['yelp_uid'])) echo '<li class="yelp-icon"><a href="' . $options['yelp_uid'] . '">'
                    .'<img title="Yelp – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/yelp-icon.png" width="48" height="48" alt="Yelp!">'
                    .'</a></li>';

                if (!empty($options['vimeo_uid'])) echo '<li class="vimeo-icon"><a href="' . $options['vimeo_uid'] . '">'
                    .'<img title="Vimeo – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/vimeo-icon.png" width="48" height="48" alt="Vimeo">'
                    .'</a></li>';

                if (!empty($options['foursquare_uid'])) echo '<li class="foursquare-icon"><a href="' . $options['foursquare_uid'] . '">'
                    .'<img title="Foursquare – '. esc_attr(get_bloginfo('name', 'display')) .'" src="' . get_stylesheet_directory_uri() . '/icons/foursquare-icon.png" width="48" height="48" alt="foursquare">'
                    .'</a></li>';

                echo '</ul><!-- end of .social-icons -->';
         ?>
         </div><!-- end of col-380 fit -->

         <div class="grid col-940 footer-images">
          <a class="vino" title="ViNO - Vihreiden nuorten ja opiskelijoiden liitto ry" href="http://www.vino.fi">
          <?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/vino-logo.png" />';?>
          </a>
          <a class="ksv" title="Keski-Suomen Vihreät ry" href="http://www.keskisuomenvihreat.fi">
            <?php echo '<img src="' . get_stylesheet_directory_uri() . '/images/ksv.png" />';?>
          </a>
        </div>

         </div><!-- end of col-940 -->
         <?php get_sidebar('colophon'); ?>

        <div class="grid col-300 copyright">
            <?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php echo esc_attr(get_bloginfo('name', 'display')); ?>
            </a>
        </div><!-- end of .copyright -->

        <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div>

        <div class="grid col-300 fit powered">
            <?php printf('Kiitos: ') ?>
            <a href="<?php echo esc_url(__('http://themeid.com/responsive-theme/','responsive')); ?>" title="<?php esc_attr_e('Responsive Theme', 'responsive'); ?>">
                    <?php printf('Responsive Theme'); ?></a><?php printf(' ja') ?>
             <a href="<?php echo esc_url(__('http://wordpress.org/','responsive')); ?>" title="<?php esc_attr_e('WordPress', 'responsive'); ?>">
                    <?php printf('WordPress'); ?></a>
        </div><!-- end .powered -->
    </div><!-- end #footer-wrapper -->

</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>