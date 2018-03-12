<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="entry-content">
                <div class="home-contentHeader">
                    <div class="home-headerblurb">
                        <h1>Share Your stories and read others</h1>
                        <h3>Below are some of the most recently published stories from the myStory community. Check them out!</h3>
                    </div>
                    <?php
                    if (is_user_logged_in() == true) {

                        } else { ?>
                    <div class="home-contentSignup">
                        <h4>Don't have an account? Create one!</h4>
                        <a href="http://mystoryonline.org/register/" class="registerButton">Sign Up</a>
                    </div>
                    <?php } ?>
                </div>
                <div class="um-form">

                    <div class="homeBookshelf">
                        <div class="profileSortNav">
                            <h2>This is our Bookshelf</h2>
                            <div class="homeDivider"></div>
                            <div class="homeSortNav">

                                <div class="storySort">
                                    <div class="dropdown">
                                      <div class="sortStoriesText">
                                        Sort Stories by
                                      </div>
                                        <button onclick="myFunction()" class="dropbtn">\/</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <button type="button" data-filter="all">All</button>
                                            <button type="button" data-filter=".bed-time">Bed Time</button>
                                            <button type="button" data-filter=".family-history">Family History</button>
                                            <button type="button" data-filter=".memory">Memory</button>
                                            <button type="button" data-filter=".public-service">Public Service</button>
                                            <button type="button" data-filter=".recipe">Recipe</button>
                                            <button type="button" data-filter=".sports">Sports</button>
                                            <button type="button" data-filter=".travel">Travel</button>
                                            <button type="button" data-filter=".vacations">Vacations</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="storySearch">
                                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <label>
		                                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
		                                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	                                </label>
                                        <button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span></button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="mix-myStories homeBooks">
                            <?php if ( have_posts() ) : ?>

                            <?php if ( is_home() && ! is_front_page() ) : ?>

                                <header>
                                    <h1 class="page-title screen-reader-text">
                                        <?php single_post_title(); ?>
                                    </h1>
                                </header>
                        </div>
                        <?php endif; ?>

                        <?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-home', get_post_format() );

			// End the loop.
			endwhile;


		?>
                    </div>
                    <!-- homeBookshelf End -->
                </div>
                <!-- um-form End -->
            </div>
            <!-- entry-content End -->
            <?php // Previous/next page navigation.
      			the_posts_pagination( array(
      				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
      				'next_text'          => __( 'Next page', 'twentysixteen' ),
      				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
      			) );

      		// If no content, include the "No posts found" template.
      		else :
      			get_template_part( 'template-parts/content', 'none' );

      		endif; ?>
        </main>
        <!-- .site-main -->
    </div>
    <!-- .content-area -->

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
