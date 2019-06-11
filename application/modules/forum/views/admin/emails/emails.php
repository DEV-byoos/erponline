<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
		<li role="presentation"><a href="<?= base_url('admin') ?>"><?= lang('home'); ?></a></li>
		<li role="presentation"><a href="<?= base_url('admin/users') ?>"><?= lang('users'); ?></a></li>
		<li role="presentation"><a href="<?= base_url('admin/forums_and_topics') ?>"><?= lang('forums_topics'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
				<li role="presentation" class="active"><a href="#"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?= lang('emails'); ?></h3>
					</div>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
						<tr>
						<th>N°</th>
						<th><?= lang('name'); ?></th>
						<th><?= lang('emails'); ?></th>
						</tr>
						</thead>
						
						<tbody>
					<?php foreach ($emails as $email) : ?>
						<tr>
						<td><?= $email->id ?></td>
						<td><?= $email->username ?></td>
						<td><?= $email->email ?></td>
						</tr>
					<?php endforeach; ?>
						</tbody>
				  </table>
				
					
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->