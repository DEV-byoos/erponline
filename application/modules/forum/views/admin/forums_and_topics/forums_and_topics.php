<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
		<li role="presentation"><a href="<?= base_url('admin') ?>"><?= lang('home'); ?></a></li>
		<li role="presentation"><a href="<?= base_url('admin/users') ?>"><?= lang('users'); ?></a></li>
		<li role="presentation" class="active"><a href="#"><?= lang('forums_topics'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
				<li role="presentation"><a href="<?= base_url('admin/emails') ?>"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><?= lang('forums_topics'); ?></h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped">
						<caption></caption>
						<thead>
							<tr>
								<th>N°</th>
								<th><?= lang('forum_name'); ?></th>
								<th><?= lang('created_at'); ?></th>
								<th><?= lang('number_of_topic'); ?></th>
								<th><?= lang('number_of_posts'); ?></th>
								<th><?= lang('date_of_latest_topics'); ?></th>
								<th><?= lang('number_of_visitor'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php if ($forums) : ?>
							<?php foreach($forums as $form) : ?>
								
								<tr>
									<td><?= $form->id; ?></td>

	<td><a href="<?= base_url('admin/listform/'.$form->id)?>"><?= $form->title ?></a></td>
									<td><?= $form->created_at; ?></td>
									<td><?= $form->count_topics; ?></td>
									<td><?= $form->count_posts; ?></td>
									<td class="hidden-xs">
									<?php if ($form->latest_topic->title !== null) : ?>
										<p>
											<small><?= $form->latest_topic->title ?><br>by <?= $form->latest_topic->author ?></a>, <?= $form->latest_topic->created_at ?></small>
										</p>
									<?php else : ?>
										<p>
											<small><?= lang('no_topic_yet'); ?></small>
										</p>
									<?php endif; ?>
								</td>
									<td></td>
								</tr>
							
							<?php endforeach; ?>
						<?php endif; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div><!-- .row -->
</div><!-- .container -->