<? $this->load->helper('html_email'); ?>

<? email_header("Reset Password for $identity"); ?>

<p>Please click this link to <?php echo anchor('auth/reset_password/'. $forgotten_password_code, 'Reset Your Password');?>.</p>

<? email_footer(); ?>