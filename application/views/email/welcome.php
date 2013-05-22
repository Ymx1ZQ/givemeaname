<? 
	$this->load->helper('html_email');
	email_header("Welcome to vubi.co!");	
	$password_shown = substr($password,0,1);
	for ($iii = 1; $iii <= strlen($password); $iii++) {
		$password_shown .= '*';	
	}
	$password_shown .= substr($password,-1,1);
	
	email_content("Dear ".$name_to_show . ",<BR/>
you just registerd on vubi.co, the web platform which innovates the way of exchanging contacts.
<BR/><BR/>You can login using the following account information:
<BR/> email <B>".$email . "</B><BR/> password <B>".$password_shown . "</B><span style='font-size:75%'> (you are the only one who knows your own password)</span>
<BR/><BR/>Complete your digital business card, exchange your contacts using your smartphone, and manage them in a your vubi.co's contact book stored in the cloud.
"); 

	email_footer(); 
?>
