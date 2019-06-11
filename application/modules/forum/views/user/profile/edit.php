<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $breadcrumb ?>
		</div>
		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('edit_your_profile') ?> <small><?= $user->username ?></small></h1>
			</div>
		</div>
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<p><?= validation_errors() ?></p>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($success)) : ?>
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					<p><?= $success ?></p>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($_SESSION['flash'])) : ?>
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					<p><?= $_SESSION['flash'] ?></p>
					<?php unset($_SESSION['flash']); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="row">
				<?= form_open_multipart() ?>
					<div class="col-md-8">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><?= lang('manage_your_compt') ?> </h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="avatar" src="<?= base_url('uploads/avatars/' . $user->avatar) ?>">
										<br><br>
										<div class="form-group">
											<label for="avatar"><?= lang('edit_your_profile') ?> </label>
											<input type="file" id="avatar" name="userfile" style="word-wrap: break-word">
										</div>
									</div>
									<div class="col-sm-7 col-sm-offset-2">
										<div class="form-group">
											<label for="username"><?= lang('your_username') ?> </label>
											<input type="text" class="form-control" id="username" name="username" placeholder="<?= $user->username ?>">
										</div>
										<div class="form-group">
											<label for="email"><?= lang('your_email') ?> </label>
											<input type="email" class="form-control" id="email" name="email" placeholder="<?= $user->email ?>">
										</div>
										<div class="form-group">
											<label for="current_password"><?= lang('current_password') ?> </label>
											<input type="password" class="form-control" id="current_password" name="current_password" placeholder="<?= lang('enter_your_password_if_you_want_to_change_it') ?>">
										</div>
										<div class="form-group">
											<label for="password"><?= lang('new_password') ?></label>
											<input type="password" class="form-control" id="password" name="password" placeholder="<?= lang('enter_a_new_password') ?>">
										</div>
										<div class="form-group">
											<label for="password_confirm"><?= lang('confirm_new_password'); ?></label>
											<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="<?= lang('confirm_your_new_password'); ?>">
										</div>
										<input type="submit" class="btn btn-primary" value="<?= lang('update_your_profile') ?>">
									</div>
								</div><!-- .row -->
							</div>
						</div>
					</div>			
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><?= lang('delete_your_compte') ?></h3>
							</div>
							<div class="panel-body">
								<p><?= lang('if_you_want_to_delete') ?></p>
								<p><strong><?= lang('be_carefull_if_you_click') ?></strong></p>
								<a href="<?= base_url('user/' . $user->username . '/delete') ?>" class="btn btn-danger btn-block btn-sm" onclick="return confirm('Are you sure you want to delete your account? If you click OK, your account will be immediatly and permanently deleted.')"><?= lang('delete_your_compte') ?></a>
							</div>
						</div>	
					</div>
				</form>
			</div><!-- .row -->
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php //var_dump($user); ?>