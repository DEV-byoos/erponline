<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
		<li role="presentation"><a href="<?= base_url('admin') ?>"><?= lang('home'); ?></a></li>
		<li role="presentation"><a href="<?= base_url('admin/users') ?>"><?= lang('users'); ?></a></li>
				<li role="presentation" class="active"><a href="<?= base_url('admin/forums_and_topics') ?>"><?= lang('forums_topics'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/options') ?>"><?= lang('options'); ?></a></li>
	<li role="presentation"><a href="<?= base_url('admin/emails') ?>"><?= lang('emails'); ?></a></li>
			</ul>
		</div>
		
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title"><?= lang('list_of_forum_topic'); ?>&nbsp&nbsp<?= $user_id->title ?>&nbsp created_at &nbsp<?= $user_id->created_at ?>&nbsp By <strong><?= $user; ?></strong> </h3>

				</div>
				
				<div class="panel-body">
					<table class="table table-striped">
						<caption></caption>
						<thead>
							<tr>
								<th>N°</th>
								<th><?= lang('users'); ?></th>
								<th><?= lang('topics'); ?></th>
								<th><?= lang('posts'); ?></th>
								<th><?= lang('date_of_latest_topics'); ?></th>
								<th><?= lang('action'); ?></th>
							</tr>
						</thead>
						<tbody>

						<?php foreach($posts as $post) : ?>

							<?php foreach($topics as $topic) : ?>
								
								<?php if($topic->id === $post->topic_id) { ?>
									<tr>
										<td><?= $topic->id; ?></td>
										<?php foreach($users as $user) : ?>

											<?php if($user->id == $topic->user_id) { ?>
											
											<td><?= $user->username;?></td>
	
										<?php }; endforeach; ?>

										<td><?= $topic->title; ?></td>
										<td><?= $post->content; ?></td>
										<td><?= $post->created_at; ?></td>

										<td><?php if($post->statut == 1){ ?>
	<a class="btn btn-xs btn-warning" href="<?= base_url('admin/block_post/' . $post->id) ?>"><?= lang('block'); ?></a>
											<?php } ?>
											<?php if($post->statut == 0){ ?>
											 <a class="btn btn-xs btn-info" id="target" href="<?= base_url('admin/deblock_post/' . $post->id) ?>"><?= lang('unblock'); ?></a>
											 <?php } ?>
	<a class="btn btn-xs btn-danger" href="<?= base_url('admin/delete_topic/' . $topic->id) ?>"><?= lang('delete'); ?></a>
										</td>
									</tr>

									<?php } ?>		
									
								<?php endforeach; ?>

							<?php endforeach; ?>
							
						</tbody>
					</table>
					
				</div>
			</div>
		</div>

	</div><!-- .row -->
</div><!-- .container -->

    

 


 
