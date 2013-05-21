<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->library('email');
        $this->load->library('ion_auth');
        $this->load->library('gman_auth');
        $this->load->library('user_agent');
        $this->load->library('form_validation');

        if ($this->ion_auth->logged_in()) {
        	redirect('/deck');
        }
        
        $this->data = array();		
	}
	
	public function index()
	{			
		$this->load->view('home', $this->data);
	}
	
	public function registration()
	{			
		$this->data['redirect_back'] = $this->input->post('redirect_back') = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward') = $this->input->post('redirect_forward');
		$this->load->view('registration', $this->data);
	}
	
	public function finalizeRegister() {
		$redirect_back = $this->input->post('redirect_back');
		$redirect_forward = $this->input->post('redirect_forward');
        
		$this->form_validation->set_rules('first_name', 'Name', 'required');
		$this->form_validation->set_rules('last_name', 'Surname', 'required');
		$this->form_validation->set_rules('email_register', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('email_confirm', 'Email Confirmation', 'required|valid_email');
		$this->form_validation->set_rules('password_register', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
		
		if ($this->input->post('email_register') != $this->input->post('email_confirm')) {
			$this->session->set_flashdata('message', array('text'=> 'The e-mail you typed does not match the confirmation e-mail field.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		
		if ($this->input->post('password_register') != $this->input->post('password_confirm')) {
			$this->session->set_flashdata('message', array('text'=> 'The password you typed does not match the confirmation password field.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', array('text'=> validation_errors(), 'type' => 'negative'));
			redirect($redirect_back);
		}

		$alias = $this->Card_Model->fixAlias($this->input->post('alias'));

		if ($this->Card_Model->existsAlias($alias)) {
			$this->session->set_flashdata('message', array('text'=> 'The Alias you chose has already been taken by another user.', 'type' => 'negative'));
			redirect($redirect_back);
		}

		$email = $this->input->post('email_register');
		
		if ($this->User_Model->existsMail($email)) {
			$this->session->set_flashdata('message', array('text'=> 'The e-mail you chose has already been used by another user.', 'type' => 'negative'));
			redirect($redirect_back);
		}

		$password = $this->input->post('password_register');
		$additional_data = array();

		if(!$this->ion_auth->register($alias, $password, $email, $additional_data)) {
			$this->session->set_flashdata('message', array('text'=> 'Something went wrong during the registration process.', 'type' => 'negative'));
			redirect($redirect_back);
		}
		$card_fields = array(
			'first_name' => trim($this->input->post('first_name')),
			'last_name' => trim($this->input->post('last_name')),
			'company' => trim($this->input->post('company')),
			'position' => trim($this->input->post('position')),
			'phone' => trim($this->input->post('phone'))
		);
		$this->vubi_auth->post_registration($email, $alias, $password, $this->input->post('timezone'), $card_fields);
		redirect('/deck/welcome'.$redirect_forward);
	}

	
	public function login()
	{
  echo "hello world";
	}
}
