<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $breadcrumb ?>
		</div>
		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('create_a_new_topic'); ?></h1>
			</div>
		</div>
		<?php if (null ==$login_needed) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<p><?= lang('you_need_to_be_looged'); ?></p>
					<p>Please <a href="<?= base_url('login') ?>"><?= lang('login'); ?></a><?= lang('or'); ?> <a href="<?= base_url('register') ?>"><?= lang('register_a_new_account'); ?></a>.</p>
				</div>
			</div>
		<?php else : ?>
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
				<?= form_open() ?>
					<div class="form-group">
						<label for="title"><?= lang('topic_title'); ?></label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Enter a topic title" value="<?= $title ?>">
					</div>
					<div class="form-group">
						<label for="content"><?= lang('content'); ?></label>
						<textarea rows="6" class="form-control" id="content" name="content" placeholder="Enter your topic content here"><?= $content ?></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-default" value="<?= lang('create_a_topic'); ?>">
					</div>
				</form>
			</div>
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->
