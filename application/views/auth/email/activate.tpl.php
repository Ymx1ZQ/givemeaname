<? $this->load->helper('html_email'); ?>

<? email_header("Activate account for $identity"); ?>

<p>Please click this link to <?php echo anchor('auth/activate/'. $id .'/'. $activation, 'Activate Your Account');?>.</p>

<? email_footer(); ?>