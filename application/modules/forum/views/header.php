<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?=$_SESSION["language"]["code"]?>">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= lang('codeigniter_forum2'); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/nodcms_general/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/nodcms_general/style.css') ?>" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php  $mysession = _mysession('user');// modif  BYOOS_modify session helper  ?>

	<header id="site-header">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?= base_url('forum') ?>"><?= lang('codeigniter_forum2'); ?></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
							<li><a href="<?= base_url() ?>"><?= lang('server_cloud') ; ?></a></li>
							<li><a href="<?= base_url('forum/switchlang') ?>"><?= lang('language') ; ?></a></li>
						<?php if (isset($mysession['username']) && $mysession['user_id'] === true) : ?>
							<?php if (_mysession('logged_in') === true) : ?>
								<li><a href="<?= base_url('admin') ?>"><?= lang('admin'); ?></a></li>
							<?php endif; ?>
						<li><a href="<?= base_url('user/' . $mysession['username']) ?>"><?= lang('profile'); ?></a></li>
							<li><a href="<?= base_url('logout') ?>"><?= lang('logout'); ?></a></li>
						<?php else : ?>
							<li><a href="<?= base_url('register') ?>"><?= lang('register'); ?></a></li>
							<li><a href="<?= base_url('login') ?>"><?= lang('login'); ?></a></li>
						<?php endif; ?>
					</ul>
				</div><!-- .navbar-collapse -->
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->
	</header><!-- #site-header -->

	<main id="site-content" role="main">
