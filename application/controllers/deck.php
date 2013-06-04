<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deck extends CI_Controller {
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
        $this->load->model('ion_auth_model');

        if (!$this->ion_auth->logged_in()) {
        	redirect('/home');        	        
        } 
        $this->data['logged'] = true;
        $this->User_Model->__initialise($this->ion_auth->get_user()->id);
        $this->data['user_data'] = $this->User_Model->getUserData();
        
	}
	
	public function index() {		
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['names'] = $this->Name_Model->getAllNames(); // get all names
		$this->load->view('deck', $this->data);		
	}	
	
	public function welcome() {					
		echo 'Welcome '. $this->data['user_data']['name_to_show'].'!';
		echo '<BR/> click <A HREF="/deck">here</A> to go on!';
	}	
	
}
