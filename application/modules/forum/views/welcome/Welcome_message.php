<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
		<?php $img_url = base_url() . $this->config->item('forum2_img_url') . 'logo_byoos_2016v2_150px.png';
		$img_tag = '<img src="' . $img_url . '" border="0" alt="' . lang('forum2_powered_by') . '"  width="100" height="150" />'; ?>			

			<div id="body">
				<table width="100%">
					<tr>
						<td  align='left' width="8%">		
							<a href='http://byoos.net'  target='blank'><?php echo $img_tag; ?></a>
						</td>
						<td align='center'>
							<h1><?= lang('welcome_to_byoos'); ?><br/><?= lang('slogan'); ?></h1>
						</td>
					</tr>
				</table>
				<div class="row">
					<div class="col-lg-3">
						<code><a href="<?php echo base_url('medlines'); ?>"><?= lang('mediboard_correctif'); ?></a><br><?= lang('nb_download').file_get_contents('public/download/download_medlines.txt'); ?>
						<br /><a href="<?php echo base_url('demo/medlines'); ?> "><?= lang('test_medlines'); ?></a>.</code>	
					</div>

					<div class="col-lg-3">
						<code><a href="<?php echo base_url('gocart233a'); ?>"><?= lang('codeigniter_gocart233a'); ?></a><br><?= lang('nb_download').file_get_contents('public/download/download_gocart233a.txt'); ?></code>
					</div>

					<div class="col-lg-3">
						<code><a href="<?php echo base_url('forum2'); ?>"><?= lang('codeigniter_forum2'); ?></a><br><?= lang('nb_download').file_get_contents('public/download/download_forum2.txt'); ?></code>
					</div>

					<div class="col-lg-3">
						<code><a href="<?php echo base_url('fladsclassifieds2'); ?>"><?= lang('fladsclassifieds2'); ?></a><br><?= lang('nb_download').file_get_contents('public/download/download_fladsclassifieds2.txt'); ?>
						<br><?= lang('classifieds_online'); ?><a href="http://www.leboncamer.com/" target="_blank"> -->ICI</a></code>	
					</div>

					<div class="col-lg-3">
						<code><a href="<?php echo base_url('codeigniter_mx2a'); ?>"><?= lang('codeigniter_mx2a'); ?></a><br><?= lang('nb_download').file_get_contents('public/download/download_codeigniter_mx2a.txt'); ?></code>
					</div>
				</div>
			</div>
