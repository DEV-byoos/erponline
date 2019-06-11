<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					
					<h3><?= lang('welcome'); ?> <?php echo $_SESSION['username']; ?></h3>
				</div>
			</div>
		
		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('login_success'); ?></h1>
			</div>
			<p><?= lang('you_are_logged_in'); ?></p>
		</div>
	</div><!-- .row -->

</div><!-- .container -->