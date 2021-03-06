<!-- MEMBER NAVIGATION -->
<div class="outerMemberNav">
    <div class="membersPageHeader">
        <h1>My Contacts</h1>
        <h3>Check out your friends' pages and read some of their stories, or search our site and make some new friends!</h3>
    </div>
    <div class="innerMemberNav">
        <a href="" class="yourContactsSort">Your Contacts</a>
        <a href="http://mystoryonline.org/my-contacts/" class="allContactsSort">All Contacts</a>
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
        <!-- SEARCH BAR END -->
    </div>
</div>
<!-- MEMBER NAVIGATION END -->

<div class="profileDivider"></div>

<!-- MYCONTACTS AREA -->
<div class="myContactsArea">

    <!-- UM MEMBERS AREA -->
    <div class="umMembers">

        <!-- <div class="um-gutter-sizer"></div> -->

        <?php $i = 0; foreach( um_members('users_per_page') as $member) { $i++; um_fetch_user( $member ); ?>

        <div <?php echo do_shortcode('[ultimatemember_show_my_contacts]'); ?> >


        <div class="um-member um-role-<?php echo um_user('role'); ?> <?php echo um_user('account_status'); ?>">

            <span class="um-member-status <?php echo um_user('account_status'); ?>"><?php echo um_user('account_status_name'); ?></span>

            <?php
		if ($cover_photos) {
			$sizes = um_get_option('cover_thumb_sizes');
			if ( $ultimatemember->mobile->isTablet() ) {
				$cover_size = $sizes[1];
			} else {
				$cover_size = $sizes[0];
			}
		?>

                <div class="um-member-cover" data-ratio="<?php echo um_get_option('profile_cover_ratio'); ?>">
                    <div class="um-member-cover-e">
                        <a href="<?php echo um_user_profile_url(); ?>" title="<?php echo esc_attr(um_user('display_name')); ?>">
                            <?php echo um_user('cover_photo', $cover_size); ?>
                        </a>
                    </div>
                </div>

                <?php } ?>

                <?php if ($profile_photo) {
			$default_size = str_replace( 'px', '', um_get_option('profile_photosize') );
			$corner = um_get_option('profile_photocorner');
		?>
                <div class="um-member-photo radius-<?php echo $corner; ?>">
                    <a href="<?php echo um_user_profile_url(); ?>" title="<?php echo esc_attr(um_user('display_name')); ?>">
                        <?php echo get_avatar( um_user('ID'), $default_size ); ?>
                    </a>
                </div>
                <?php } ?>

                <div class="um-member-card <?php if (!$profile_photo) { echo 'no-photo'; } ?>">

                    <?php if ( $show_name ) { ?>
                    <div class="um-member-name">
                        <a href="<?php echo um_user_profile_url(); ?>" title="<?php echo esc_attr(um_user('display_name')); ?>">
                            <?php echo um_user('display_name', 'html'); ?>
                        </a>
                    </div>
                    <?php } ?>

                    <?php do_action('um_members_just_after_name', um_user('ID'), $args); ?>

                    <?php do_action('um_members_after_user_name', um_user('ID'), $args); ?>

                    <?php
						if ( $show_tagline && is_array( $tagline_fields ) ) {

							um_fetch_user( $member );

							foreach( $tagline_fields as $key ) {
								if ( $key && um_filtered_value( $key ) ) {
									$value = um_filtered_value( $key );


						?>

                        <div class="um-member-tagline um-member-tagline-<?php echo $key;?>">
                            <?php echo $value; ?>
                        </div>

                        <?php
								} // end if
							} // end foreach
						} // end if $show_tagline
						?>

                            <?php if ( $show_userinfo ) { ?>

                            <div class="um-member-meta-main">

                                <?php if ( $userinfo_animate ) { ?>
                                <div class="um-member-more"><a href="#"><i class="um-faicon-angle-down"></i></a></div>
                                <?php } ?>

                                <div class="um-member-meta <?php if ( !$userinfo_animate ) { echo 'no-animate'; } ?>">

                                    <?php foreach( $reveal_fields as $key ) {
										if ( $key && um_filtered_value( $key ) ) {
											$value = um_filtered_value( $key );

								?>

                                    <div class="um-member-metaline um-member-metaline-<?php echo $key; ?>"><span><strong><?php echo $ultimatemember->fields->get_label( $key ); ?>:</strong> <?php echo $value; ?></span></div>

                                    <?php
									}
								}
								?>

                                    <?php if ( $show_social ) { ?>
                                    <div class="um-member-connect">

                                        <?php $ultimatemember->fields->show_social_urls(); ?>

                                    </div>
                                    <?php } ?>

                                </div>

                                <div class="um-member-less"><a href="#"><i class="um-faicon-angle-up"></i></a></div>

                            </div>

                            <?php } ?>

                </div>

        </div>
        </div>

        <?php
	um_reset_user_clean();
	} // end foreach

	um_reset_user();
	?>

        <!-- <div class="um-clear"></div> -->

    </div>
    <!-- UM MEMBERS AREA END -->
</div>
<!-- MYCONTACTS AREA END-->
