<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">

		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>

		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('register'); ?></h1>
			</div>
			<?= form_open() ?>
				<div class="form-group">
					<label for="username"><?= lang('username'); ?></label>
					<input type="text" class="form-control" id="username" name="username" placeholder="<?= lang('username'); ?>">
					<p class="help-block"><?= lang('at_least_4_characters'); ?></p>
				</div>
				<div class="form-group">
					<label for="email"><?= lang('email'); ?></label>
					<input type="email" class="form-control" id="email" name="email" placeholder="<?= lang('enter_your_email'); ?>">
					<p class="help-block"><?= lang('a_valid_email'); ?></p>
				</div>
				<div class="form-group">
					<label for="password"><?= lang('password'); ?></label>
					<input type="password" class="form-control" id="password" name="password" placeholder="<?= lang('enter_a_password'); ?>">
					<p class="help-block"><?= lang('at_least_6_characters'); ?></p>
				</div>
				<div class="form-group">
					<label for="password_confirm"><?= lang('confirm_your_password'); ?></label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="<?= lang('confirm_your_password'); ?>">
					<p class="help-block"><?= lang('must_match_your_password'); ?></p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="<?= lang('register'); ?>">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->