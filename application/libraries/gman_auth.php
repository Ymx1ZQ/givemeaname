<?php
class Gman_auth {

    function post_registration($email, $password, $first_name, $last_name) {
		$CI =& get_instance();
		$CI->load->model('User_Model');
        $CI->load->library('ion_auth');
        $CI->load->library('email');		
        $CI->load->helper('url');

		$CI->ion_auth->login($email,$password,true);		
		
		// send mail confirmation
		$content = $CI->load->view('email/welcome',
			array(
					'name_to_show' => $first_name . ' ' . $last_name,
					'email' => $email,
					'password' => $password,
			),
			true
		);

		$CI->email->from('team@givemeaname.co', 'Give Me a Name');
		$CI->email->to($email);
		$CI->email->subject('Welcome to givemeaname.org!');
		$CI->email->set_mailtype("html");
		$CI->email->message($content);
		$CI->email->send();
	}
}
