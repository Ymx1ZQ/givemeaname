<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class Auth extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('gman_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
        $this->load->library('user_agent');
		$this->load->library('email');
        $this->load->model('User_Model');
		$this->load->database();
		$this->load->helper('url');
		$this->data['user_data'] = array();

		if ($this->ion_auth->logged_in()) {
			$this->User_Model->__initialise($this->ion_auth->get_user()->id);
			$this->data['user_data'] = $this->User_Model->getUserData();
		}
	}

	public function finalizeSignup() {
		if ($this->ion_auth->logged_in()) {
			$this->session->set_flashdata('message', array('text'=> 'Something went wrong', 'type' => 'negative'));
			redirect('/home');
		} 
		
		$redirect_back = $this->input->post('redirect_back');
		$redirect_forward = $this->input->post('redirect_forward');
		if ($redirect_back == null) $redirect_back = "/home/signup";
		if ($redirect_forward == null) $redirect_forward = "/deck/welcome";
        
        $this->session->set_flashdata('suggested_fields', array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'email_confirm' => $this->input->post('email_confirm')
		));
        	
		$this->form_validation->set_rules('first_name', 'Name', 'required');
		$this->form_validation->set_rules('last_name', 'Surname', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('email_confirm', 'Email Confirmation', 'required|valid_email|matches[email_confirm]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		
		if ($this->input->post('email') != $this->input->post('email_confirm')) {
			$this->session->set_flashdata('message', array('text'=> 'The e-mail you typed does not match the confirmation e-mail field.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		
		if ($this->input->post('password') != $this->input->post('password_confirm')) {
			$this->session->set_flashdata('message', array('text'=> 'The password you typed does not match the confirmation password field.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', array('text'=> validation_errors(), 'type' => 'negative'));
			redirect($redirect_back);
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$additional_data = array(
			'first_name' => $first_name,
			'last_name' => $last_name
		);
		
		if ($this->User_Model->existsMail($email)) {
			$this->session->set_flashdata('message', array('text'=> 'The e-mail you chose has already been used by another user.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		
		
		
		if(!$this->ion_auth->register($email, $password, $email, $additional_data)) { // send email twice (both for email and username)
			$this->session->set_flashdata('message', array('text'=> 'Something went wrong during the registration process.', 'type' => 'negative'));
			redirect($redirect_back);
		}		
		$this->gman_auth->post_registration($email, $password, $first_name, $last_name);	
		redirect($redirect_forward);
		

	}

	function login() {		
		if ($this->ion_auth->logged_in()) {
			$this->session->set_flashdata('message', array('text'=> 'Something went wrong', 'type' => 'negative'));
			redirect('/deck');
		} 
		
		$redirect_back = $this->input->post('redirect_back');
		$redirect_forward = $this->input->post('redirect_forward');
		if ($redirect_back == null) $redirect_back = "/home";
		if ($redirect_forward == null) $redirect_forward = "/deck";
        
        		
		$email = $this->input->post('email');
		$remember = (bool) $this->input->post('remember');
		$password = $this->input->post('password');

		$this->session->set_flashdata('suggested_fields', array('email' => $email));
		
		if ($this->ion_auth->login($email, $password, $remember)) {
            redirect($redirect_forward);
		} else {
			$this->session->set_flashdata('message', array('text'=> 'Your email and password did not match. Please try again. If you forgot your password, click <A HREF="/auth/forgot_password">here</A>.', 'type' => 'negative'));
			redirect($redirect_back);
		}
	}

	function logout()
	{
		$logout = $this->ion_auth->logout();
		redirect('/home');
	}

	function delete_account() {
		if (!$this->ion_auth->logged_in()) {
			redirect('/home');
		}

		$password = $this->input->post('password');
		$identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

		$check_password = $this->ion_auth_model->check_password($identity, $password);

		if ($check_password == false) {
			$this->session->set_flashdata('message', array('text'=> 'The password you typed is wrong! Please, try again!', 'type' => 'negative'));
			redirect('/auth/account_settings');
		}

		$this->User_Model->delete_account();
		$logout = $this->ion_auth->logout();
		$this->session->set_flashdata('message', array('text'=> 'We are so sorry you left GiveMeAName... we hope you will come back sooner or later!', 'type' => 'neutral'));
		redirect('/home');
	}


	function forgot_password() {
		//get the identity type from config and send it when you load the view
		$identity = $this->config->item('identity', 'ion_auth');
		$identity_human = ucwords(str_replace('_', ' ', $identity)); //if someone uses underscores to connect words in the column names
		$this->form_validation->set_rules($identity, $identity_human, 'required');
		if ($this->form_validation->run() == false) {
			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->load->view('forgot_password', $this->data);
		}
		else {
			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($this->input->post($identity));

			if ($forgotten)
			{ //if there were no errors
				$this->session->set_flashdata('message', array('text'=> 'We sent to your email address an email so that you can reset your password. (If you do not find it, check in the spam folder of your email account.)', 'type' => 'neutral'));
				redirect('/home');
			}
			else
			{
				$this->session->set_flashdata('message', array('text'=> 'The email address you typed does not belong to any registered user.', 'type' => 'negative'));
				redirect('/auth/forgot_password');
			}
		}
	}

	//reset password - final step for forgotten password
	public function reset_password($code)
	{
		$reset = $this->ion_auth->forgotten_password_complete($code);

		if ($reset)
		{  //if the reset worked then send them to the login page
			$this->session->set_flashdata('message', array('text'=> 'A mail with your new password was sent to you. (If you do not find it, check in the spam folder of your email account.)', 'type' => 'neutral'));
			redirect('home');
		}
		else
		{ //if the reset didnt work then send them back to the forgot password page
			$this->session->set_flashdata('message', array('text'=> $this->ion_auth->errors(), 'type' => 'negative'));
			redirect('auth/forgot_password');
		}
	}

	//account settings: password + mail
	function account_settings()
	{
		if (!$this->ion_auth->logged_in()) {
			redirect('home');
		}
		$this->data['suggested_fields'] = array(
			'first_name' => $this->data['user_data']['first_name'],
			'last_name' => $this->data['user_data']['last_name'],
			'email' => $this->data['user_data']['email']
		);
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view('account_settings', $this->data);
	}

	function account_settings_update()
	{
		$this->form_validation->set_rules('email_register', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('new', 'New Password', 'min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', 'Confirm New Password');
		$this->form_validation->set_rules('old', 'Old password', 'required');

		if (!$this->ion_auth->logged_in()) {
			redirect('home');
		}

		if ($this->form_validation->run() == false) {
			$this->data['email'] = $this->User_Model->getMail();
			$this->data['message'] = $this->session->flashdata('message');
			$this->load->view('account_settings', $this->data);
			return;
		}

		// set identity and password
		$identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));
		$password = $this->input->post('old');

		// check password
		$check_password = $this->ion_auth_model->check_password($identity, $password);
		if ($check_password == false) {
			//if the password is not correct
			$this->session->set_flashdata('message', array('text'=> 'The password you typed is not correct.', 'type' => 'negative'));
			redirect('auth/account_settings');
		}

		// CHANGE PASSWORD
		// check if there is need to change password
		if ($this->input->post('new') == "") {
			$change_password = true;
		}
		else {
				// change password
				$change_password = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
				if ($change_password == false) {
					$this->session->set_flashdata('message', array('text'=> $this->ion_auth->errors(), 'type' => 'negative'));
				}
		}

		// CHANGE EMAIL
		// check if there is need to change mail
		if ($this->User_Model->getMail() == $this->input->post('email_register')) {
			$change_mail = true;
		}
		else {
				// change_mail settings
				$options = array(
					'user_id' => $this->ion_auth->get_user()->id,
					'email' => $this->input->post('email_register')
					);
				// change mail
				$change_mail = $this->User_Model->updateMail($options);
				if ($change_mail == false) {
					$this->session->set_flashdata('message', array('text'=> 'There was something wrong while trying to update your email.', 'type' => 'negative'));
				}
		}

		// FINAL REDIRECT

		// any error?
		if ($change_password == false || $change_mail == false) redirect('auth/account_settings');
		else {
				// send a email with new account information
				$content = $this->load->view('email/login_information_changed',
					array(
							'email' => $this->input->post('email_register'),
							'password' => $this->input->post('new')
					),
					true
				);
				$this->email->from('team@givemeaname.org', 'GiveMeAName Team');
				$this->email->to($this->input->post('email_register'));
				$this->email->subject('Login information changed on givemeaname.org!');
				$this->email->set_mailtype("html");
				$this->email->message($content);
				$this->email->send();

				// redirect to deck
				$this->session->set_userdata('email', $this->input->post('email_register'));
				$this->session->set_flashdata('message', array('text'=> 'You just edited your account settings. A mail with your new login information has just been sent to '. $this->input->post('email_register'), 'type' => 'positive'));
				redirect('/deck');
		}
	}
	
	public function love() {
		$this->email->from('team@givemeaname.org', 'GiveMeAName Team');
		$this->email->to('paolo.meola@gmail.com');
		$this->email->subject('Login information changed on givemeaname.org!');
		$this->email->set_mailtype("html");
		$this->email->message('contenuto');
		$this->email->send();
		echo 'ciao';
	}
	

}
