<? $this->load->helper('html_email'); ?>

<? email_header("New Password for $identity"); ?>

<p>Your password has been reset to: <?php echo $new_password;?></p>

<? email_footer(); ?>