<? $this->load->helper('html_email'); 

	$password_shown = substr($password,0,1);
	for ($iii = 1; $iii <= strlen($password); $iii++) {
		$password_shown .= '*';	
	}
	$password_shown .= substr($password,-1,1);

email_header("Login information changed on vubi.co!"); 

email_content("You just edited your account settings on vubi.co .
<BR/><BR/>In order to login, you should now use the following new login information:
<BR/> email <B>".$email . "</B><BR/> password <B>".$password_shown . "</B><span style='font-size:75%'> (you are the only one who knows your own password)</span>
<BR/><BR/>"); ?>

<? email_footer(); ?>
