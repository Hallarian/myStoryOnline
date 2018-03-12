<div class="um <?php echo $this->get_class( $mode ); ?> um-<?php echo $form_id; ?>">

<div class="welcome">
	<h1>Login</h1>
	<h3>Enter account information in the text boxes below and then click login to access your account.</h3>
</div>
<hr>
	<div class="um-form">

		<form method="post" action="" autocomplete="off">


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
