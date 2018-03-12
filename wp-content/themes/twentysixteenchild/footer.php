<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    </div>
    <!-- .site-content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
            <?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
        </nav>
        <!-- .main-navigation -->
        <?php endif; ?>
        <div class="innerFooter">
            <div class="site-info">
                <span class="site-title"><a href="mystoryonline.org" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                <div class="aboutSite">
                    Our intention with myStory is to allow users of all technological backgrounds the ability to create and share stories with friends, and family; and to document a person's personal history to the world, if he or she so choses. Harkening back to the days before computers were the primary source of reading and telling stories, we have created an experience that evokes classic storytelling by using skeuomorphic design which creates a "real world objects" in a digital space.
                </div>
            </div>
            <!-- .site-info -->
            <div class="contactForm">
                <h1>Contact Us</h1>
                <?php echo do_shortcode('[wpforms id="822"]'); ?>
            </div>
        </div>
    </footer>
    <!-- .site-footer -->
    </div>
    <!-- .site-inner -->
    </div>
    <!-- .site -->

    <?php wp_footer(); ?>
    <script type="text/javascript" src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/js/dropdown.js"></script>
    <script src="http://mystoryonline.org/wp-content/themes/twentysixteenchild/js/mixitup.js"></script>
    <script>
        var mixer = mixitup('.mix-myStories', {
            animation: {
                easing: 'ease-in-out'
            }
        });
        
        var mixer = mixitup('.mix-publicStories', {
            animation: {
                easing: 'ease-in-out'
            }
        });

    </script>
    <script>
        $(document).ready(function() {
            $(".tab-nav div").click(function() {
                var target = $(this).attr('data-trigger');
                console.log(target);
                $('[data-trigger]').removeClass('navActive');
                $(this).addClass('navActive');
                $('[data-target]').removeClass('tabOpen');
                var selector= `[data-target="${target}"]`;
                $(selector).addClass('tabOpen');
                
            })
        })

    </script>
    </body>

    </html>
