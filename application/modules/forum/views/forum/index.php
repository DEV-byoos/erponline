<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $breadcrumb ?>
		</div>
		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('forums'); ?></h1>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-striped table-condensed table-hover">
				<caption></caption>
				<thead>
					<tr>
						<th><?= lang('forums'); ?></th>
						<th><?= lang('topics'); ?></th>
						<th><?= lang('posts'); ?></th>
						<th class="hidden-xs"><?= lang('latest_topic'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if ($forums) : ?>
						<?php foreach ($forums as $forum) : ?>
							<tr>
								<td>
									<p>
										<a href="<?= base_url('forum/index/'.$forum->slug) ?>"><?= $forum->title ?></a><br>
										<small><?= $forum->description ?></small>
									</p>
								</td>
								<td>
									<p>
										<small><?= $forum->count_topics ?></small>
									</p>
								</td>
								<td>
									<p>
										<small><?= $forum->count_posts ?></small>
									</p>
								</td>
								<td class="hidden-xs">
									<?php if ($forum->latest_topic->title !== null) : ?>
										<p>
											<small><a href="<?= base_url($forum->latest_topic->permalink) ?>"><?= $forum->latest_topic->title ?></a><br><?= lang('by'); ?> <a href="<?= base_url('user/' . $forum->latest_topic->author) ?>"><?= $forum->latest_topic->author ?></a>, <?= $forum->latest_topic->created_at ?></small>
										</p>
									<?php else : ?>
										<p>
											<small><?= lang('no_topic_yet'); ?></small>
										</p>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
		<?php 
		if (_mysession('user_id') === '1') : ?>
			<div class="col-md-12">
				<a href="<?= base_url('forum/create_forum') ?>" class="btn btn-default"><?= lang('create_forum'); ?></a>
			</div>
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->
