<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
	<div id="infoMessage"><?php echo !isset($message) ? '' :  $message;?></div>
		<?php if (isset($forum)) : ?>
			<div class="col-md-12">
				<?= $breadcrumb ?>
			</div>
			<div class="col-md-12">
				<div class="page-header">
					<h1><?= $forum->title ?></h1>
					<p><?= $forum->description ?></p>
				</div>
			</div>
			
			<div class="col-md-12">
				<?php if (isset($topics) && !empty($topics)) : ?>
					<table class="table table-striped table-condensed table-hover">
						<caption></caption>
						<thead>
							<tr>
								<th><?= lang('topics'); ?></th>
								<th><?= lang('posts'); ?></th>
								<th class="hidden-xs"><?= lang('latest_post'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($topics as $topic) : ?>
								<tr>
									<td>
										<p>
											<a href="<?= base_url('forum/topic/'.$topic->permalink) ?>"><?= $topic->title ?></a><br>
											<small><?= lang('created_by');?> <a href="<?= base_url('user/' . $topic->author) ?>"><?= $topic->author ?></a>, <?= $topic->created_at ?></small>
										</p>
									</td>
									<td>
										<p>
											<small><?= $topic->count_posts ?></small>
										</p>
									</td>
									<td class="hidden-xs">
										<p>
											<small><?= lang('by'); ?> <a href="<?= base_url('user/' . $topic->latest_post->author) ?>"><?= $topic->latest_post->author ?></a><br><?= $topic->latest_post->created_at ?></small></p>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php else : ?>
					<h4><?= lang('no_topic_yet'); ?></h4>
				<?php endif; ?>
			</div>
			<?php
			if (null !==_mysession('logged_in')) : ?>
				<div class="col-md-12">
					<a href="<?= base_url('forum/create_topic/'.$forum->slug  )  ?>" class="btn btn-default"><?= lang('create_a_new_topic'); ?></a>
				</div>
			<?php endif; ?>
		<?php endif; ?>		
	</div><!-- .row -->
</div><!-- .container -->
