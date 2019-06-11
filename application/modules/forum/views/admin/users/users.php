<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
		<li role="presentation"><a href="<?= base_url('admin') ?>"><?= lang('home'); ?></a></li>
		<li role="presentation" class="active"><a href="#"><?= lang('users'); ?></a></li>
		<li role="presentation"><a href="<?= base_url('admin/forums_and_topics') ?>"><?= lang('forums_topics'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
				<li role="presentation"><a href="<?= base_url('admin/emails') ?>"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?= lang('users'); ?></h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<caption></caption>
						<thead>
							<tr>
								<th>N°</th>
								<th><?= lang('name'); ?></th>
								<th><?= lang('permission'); ?></th>
								<th class="hidden-xs"><?= lang('registration_date'); ?></th>
								<th><?= lang('action'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) : ?>
								<tr>
									<td><?= $user->id ?></td>
<td><a href="<?= base_url('user/'.$user->username)?>"><?= $user->username ?></a></td>
									<?php if ($user->is_admin) : ?>
										<td>admin</td>
									<?php elseif ($user->is_moderator) : ?>
										<td>mod</td>
									<?php else : ?>
										<td>user</td>
									<?php endif; ?>
									<td class="hidden-xs"><?= $user->created_at ?></td>
<td><a class="btn btn-xs btn-primary" href="<?= base_url('admin/edit_user/'. $user->username) ?>"><?= lang('edit'); ?></a> <a class="btn btn-xs btn-danger" href="<?= base_url('admin/delete_user/' . $user->username) ?>"><?= lang('delete'); ?></a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php //var_dump($users); ?>