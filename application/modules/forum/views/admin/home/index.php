<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" class="active"><a href="#"><?= lang('home'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/users') ?>"><?= lang('users'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/forums_and_topics') ?>"><?= lang('forums_topics'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/emails') ?>"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?= lang('administration_home'); ?></h3>
				</div>
				<div class="panel-body">
					
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->