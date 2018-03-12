	<?php

	/***
	***	@Check if user can view user profile
	***/
	add_filter('um_post_can_view_main', 'um_friends_can_view_main', 10, 2 );
	function um_friends_can_view_main( $can_view, $user_id ) {
		global $ultimatemember;
		
		if ( !is_user_logged_in() || get_current_user_id() != $user_id ) {
			$is_private_case = $ultimatemember->user->is_private_case( $user_id, __('Friends only','um-friends') );
			if ( $is_private_case ) {
				$can_view = __('You must be a friend of this user to view their post','um-friends');
			}
		}
		
		return $can_view;

		echo $user_id;
	}

	?>