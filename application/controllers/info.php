<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
        $this->load->library('ion_auth');
        $this->load->model('User_Model');
        if ($this->ion_auth->logged_in()) $this->data['logged'] = true;
        else $this->data['logged'] = false;
        
	}
		
	public function about()
	{
		$this->data['suggested_fields'] = $this->input->post('suggested_fields');
		$this->data['redirect_back'] = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');
		$this->load->view('static_pages/about', $this->data);
	}
	
	public function contacts()
	{
		$this->data['suggested_fields'] = $this->input->post('suggested_fields');
		$this->data['redirect_back'] = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');

		$this->load->view('static_pages/contacts', $this->data);
	}
	
}
