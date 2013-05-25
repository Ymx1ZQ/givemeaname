<? 
	$this->load->helper('html_email');
	email_header("Welcome to GiveMeAName!");	
	$password_shown = substr($password,0,1);
	for ($iii = 1; $iii <= strlen($password); $iii++) {
		$password_shown .= '*';	
	}
	$password_shown .= substr($password,-1,1);
	
	email_content("Dear ".$name_to_show . ",<BR/>
you just registerd on GiveMeAName.org, the web platform which donates names to children.
<BR/><BR/>You can login using the following account information:
<BR/> email <B>".$email . "</B><BR/> password <B>".$password_shown . "</B><span style='font-size:75%'> (you are the only one who knows your own password)</span>
<BR/><BR/>Propose names, chose them, adopt a child and provide her/him an education.
"); 

	email_footer(); 
?>
