<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>">
	<div class="welcome">
		<h1>Welcome to My Story!</h1>
		<h3>In order to create an account you must fill in the text boxes below with the account information you'd like to use.</h3>
	</div>
	<hr>
	<div class="um-form">

		<form method="post" action="">

		<?php

			do_action("um_before_form", $args);

			do_action("um_before_{$mode}_fields", $args);

			do_action("um_main_{$mode}_fields", $args);

			do_action("um_after_form_fields", $args);

			do_action("um_after_{$mode}_fields", $args);

			do_action("um_after_form", $args);

		?>

		</form>

	</div>

</div>
