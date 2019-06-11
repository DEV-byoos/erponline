<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation"><a href="<?= base_url('admin') ?>"><?= lang('home'); ?></a></li>
				<li role="presentation" class="active"><a href="<?= base_url('admin/users') ?>"><?= lang('back_to_users'); ?></a></li>
				<li role="presentation"><a href="<?= base_url('admin/forums_and_topics') ?>"><?= lang('forums_topics'); ?></a></li>
				<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
				<li role="presentation"><a href="<?= base_url('admin/emails') ?>"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?= lang('edit_user'); ?> <?= $user->username ?></h3>
				</div>
				<div class="panel-body">
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
							<p><?= validation_errors() ?></p>
						</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
						<div class="alert alert-danger" role="alert">
							<p><?= $error ?></p>
						</div>
					<?php endif; ?>
					<?php if (isset($success)) : ?>
						<div class="alert alert-success" role="alert">
							<p><?= $success ?></p>
						</div>
					<?php endif; ?>
					<?= form_open() ?>	
						<div class="form-group">	
							<label for="user_rights"><?= lang('select_user_rights'); ?></label>	
							<select class="form-control" name="user_rights" id="user_rights">
								<?= $options ?>
							</select>
						</div>
					<input type="submit" class="btn btn-default" value="<?= lang('update_rights'); ?>">
						<?php if ($user->updated_at !== null) : ?>
							<small>(last update by <?= $user->updated_by ?>, <?= $user->updated_at ?>)</small>
							<?php endif; ?>
					</form>
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php //var_dump($users); ?>