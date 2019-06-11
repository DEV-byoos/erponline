<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $breadcrumb ?>
		</div>
		<div class="col-md-12">
			<div class="page-header">
				<h1><?= lang('user_profile'); ?>&nbsp<small><?= $user->username ?></small> <?= $edit_button ?></h1>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-2 text-center">
					<img class="avatar" src="<?= base_url('uploads/avatars/' . $user->avatar) ?>">
					<h2><?= $user->username ?></h2>
				</div>
				<div class="col-sm-4 col-sm-offset-1">
					<p><?= lang('joined'); ?>: <?= $user->created_at ?></p>
					<p><?= lang('last_active'); ?>: <?= $user->latest_post->created_at ?></p>
					<p><?= lang('topic_started'); ?>: <?= $user->count_topics ?></p>
					<p><?= lang('posts'); ?>: <?= $user->count_posts ?></p>
				</div>
				<div class="col-sm-5">
					<?php if (isset($user->latest_topic->permalink)) : ?>
						<p><?= lang('latest_topic'); ?>: <a href="<?= $user->latest_topic->permalink ?>"><?= $user->latest_topic->title ?></a></p>
					<?php else : ?>
						<p><?= lang('latest_topic'); ?>: <?= $user->latest_topic->title ?></p>
					<?php endif; ?>
					<?php if (isset($user->latest_post->topic->permalink)) : ?>
						<p><?= lang('latest_post'); ?>: <a href="<?= $user->latest_post->topic->permalink ?>"><?= $user->latest_post->topic->title ?></a></p>
					<?php else : ?>
						<p><?= lang('latest_post'); ?>: <?= $user->username ?> has not posted yet</p>
					<?php endif; ?>
				</div>
			</div><!-- .row -->
		</div>
	</div><!-- .row -->
</div><!-- .container -->

<?php //var_dump($user); ?>