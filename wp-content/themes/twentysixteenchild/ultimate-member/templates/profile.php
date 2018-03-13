<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?> um-role-<?php echo um_user('role'); ?> ">

    <div class="um-form">

        <?php do_action('um_profile_before_header', $args ); ?>

        <?php if ( um_is_on_edit_profile() ) { ?>
        <form method="post" action="">
            <?php } ?>

            <?php do_action('um_profile_header_cover_area', $args ); ?>

            <?php do_action('um_profile_header', $args ); ?>


            <div class="outerProfileBody">

                <div class="profileSortNav">

                    <div class="topSortNav">
                        <div class="newStoryPost"><a href="http://mystoryonline.org/add-new/">Start New Story +</a></div>

                        <!-- SORT STORIES BY THEME, NAME, DATE, AUTHOR -->
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
                        <!-- SEARCH SITE BY STORIES, AUTHOR, THEMES, ETC-->
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

                    <div class="profileDivider"></div>

                    <div class="bottomSortNav tab-nav">
                        <div class="myStorySort navActive" data-trigger="1">My Stories

                        </div>
                        <div class="myContactSort" data-trigger="2">My Contact's Stories</div>
                        <div class="publicSort" data-trigger="3">Public Stories</div>
                    </div>

                </div>
                <div class="mix-outerStorySort">
                    <!------------------------------------>
                    <!---------- MY STORIES TAB ---------->
                    <!------------------------------------>
                    <div class="mix-myStories umProfileBody tabOpen tab" data-target="1">
                        <?php
				// Custom hook to display tabbed content
				    include("profile/posts.php");
                        ?>
                    </div>



                    <!------------------------------------>
                    <!--------- MY CONTACTS TAB ---------->
                    <!------------------------------------>

                    <div class="mix-myContactsStories umProfileBody tab" data-target="2">
                        <h1>Contacts Stories</h1>
                    </div>


                    <!------------------------------------>
                    <!-------- PUBLIC STORIES TAB -------->
                    <!------------------------------------>
                    <div class="mix-publicStories umProfileBody tab" data-target="3">
                        <?php
                        $args = array('post_type' => 'post');
                        $post_query = new WP_Query($args);
                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                        ?>

                            <?php
                            $cat_classes = '';
                            $cats = get_the_category();
                                //print_r($cats);
                                foreach($cats as $cat){
                                    $cat_classes = $cat_classes . $cat->slug . ' ';
                                }
                            ?>

                                <div class="mix umItem" <?php echo $cat_classes; ?>>
                                    <div class="umItemLink">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <div class="umItemMeta">by<br>
                                        <?php echo get_the_author(); ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                            ?>
                                    <h1>Public Stories</h1>

                    </div>
                </div>
            </div>

            <?php if ( um_is_on_edit_profile() ) { ?>
        </form>
        <?php } ?>

    </div>

</div>
