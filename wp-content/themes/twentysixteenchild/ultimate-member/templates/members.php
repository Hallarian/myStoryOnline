<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>">

	<div class="um-form">

			<?php do_action('um_members_directory_search', $args ); ?>
			
			<?php do_action('um_members_directory_head', $args ); ?>
			
			<?php
				if ($form_id == 845) {
					do_action('um_friends_directory_display', $args );
				} else {
					do_action('um_members_directory_display', $args);
				} ;
			?>
			
			<?php do_action('um_members_directory_footer', $args ); ?>

	</div>
	
</div>