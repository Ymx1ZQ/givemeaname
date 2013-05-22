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
        $this->load->model('User_Model');

        if ($this->ion_auth->logged_in()) {
        	redirect('/deck');
        }
        
        $this->data = array();		
	}
	
	public function index() {			
		$this->data['redirect_back'] = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['suggested_fields'] = $this->session->flashdata('suggested_fields');	
		$this->load->view('home', $this->data);		
	}
	
	public function signup() {			
		$this->data['redirect_back'] = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['suggested_fields'] = $this->session->flashdata('suggested_fields');
		$this->load->view('signup', $this->data);
	}

	
	public function login()
	{
		
	}
	
	public function about()
	{
		$this->load->view('about');
	}
	
}
