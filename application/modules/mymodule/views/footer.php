<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	<footer id="site-footer" role="contentinfo">
	<!--Compteur visite de Luc@s http://www.phpcs.com/  -->
	<p class="footer"><?= lang('page_viewed'); ?>  <strong><?php echo $this->counter->visites(); ?></strong> <?= lang('times'); ?>&nbsp;&nbsp;&nbsp;&nbsp;<?= lang('connected'); ?> <strong><?php echo  $this->counter->view(); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;<?= lang('page_rendered_in'); ?> <strong>{elapsed_time}</strong> <?= lang('seconds'); ?>. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
	</p>
	</footer><!-- #site-footer -->
	<pre>				
	<?php   

	( $this->config->item('show_session_footer')) ? print_r($this->session->userdata()) : '';

	?>
</pre>
</body>
</html>
