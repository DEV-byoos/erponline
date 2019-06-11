<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	</main><!-- #site-content -->
	<footer id="site-footer" role="contentinfo">
		<?php if ( $this->config->item('show_session_footer')) {
				echo '<pre>';
					echo  lang('show_session_footer').'<br />';
					print_r($this->session->all_userdata());
				echo '</pre>';
			} ?>
	</footer><!-- #site-footer -->
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/script.js') ?>"></script>

</body>
</html>
