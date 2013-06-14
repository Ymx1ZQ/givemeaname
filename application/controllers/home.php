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
        $this->load->model('Name_Model'); 
        $this->load->model('Donation_Model');

        if ($this->ion_auth->logged_in()) {
        	redirect('/deck');
        }
        $this->data['logged'] = false;
	}
	
	public function index() {			
		$this->data['redirect_back'] = $this->input->post('redirect_back');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['suggested_fields'] = $this->session->flashdata('suggested_fields');
		$this->data['names'] = $this->Name_Model->getAllNames(0); // get all names not funded
		$this->load->view('home', $this->data);		
	}
	
	public function signup($key = null) {			
		switch ($key) {
			case null:
				$this->data['redirect_back'] = $this->input->post('redirect_back');
				$this->data['redirect_forward'] = $this->input->post('redirect_forward');
				break;
			case 'propose':
				$this->data['redirect_back'] = '/home/signup/propose';
				$this->data['redirect_forward'] = '/deck/propose';
				break;
			default:
				if (is_numeric($key)) {
					$this->data['redirect_back'] = '/home/signup/propose';
					$this->data['redirect_forward'] = '/deck/view_name/'.$key;
				}
				else {
					$this->data['redirect_back'] = '/home/signup/propose';
					$this->data['redirect_forward'] = '/deck/welcome';
				}
				break;
		}
		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['suggested_fields'] = $this->session->flashdata('suggested_fields');
		$this->load->view('signup', $this->data);
	}	
	
	public function propose() {
		$this->session->set_flashdata('message', array('text'=> 'Before proposing a name, you have to signup on givemeaname.org .', 'type' => 'positive'));			
		redirect('home/signup/propose');
		$this->data['redirect_forward'] = $this->input->post('redirect_forward');
		
	}
}
