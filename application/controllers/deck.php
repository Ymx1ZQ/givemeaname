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
		$this->load->model('Donation_Model');        
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
		$this->data['names'] = $this->Name_Model->getAllNames(0); // get all names not funded
		$this->load->view('deck', $this->data);		
	}	
	
	public function welcome() {					
		echo 'Welcome '. $this->data['user_data']['name_to_show'].'!';
		echo '<BR/> click <A HREF="/deck">here</A> to go on!';
	}	

	public function propose() {					
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view('propose_name', $this->data);				
	}	
	
	public function finalizePropose() {	
		if ($this->Name_Model->existsNonfundedName(trim($this->input->post('name')))) {
			$name = $this->Name_Model->getNonfundedName(trim($this->input->post('name')));
			$this->session->set_flashdata('message', array('text'=> 'This name has already been proposed!', 'type' => 'negative'));			
			redirect('/deck/view_name/'.$name['id']);
		} 
		$options_name = array(
			"name" => trim($this->input->post('name')),
			"gender" => trim($this->input->post('gender'))
			);
		$this->Name_Model->createName($options_name);
		$name = $this->Name_Model->getNonfundedName(trim($this->input->post('name')));
		$options_donation = array(
			"name_id" => $name['id'],
			"user_id" => $this->data['user_data']['id'],
			"amount" => trim($this->input->post('amount')),
			"comment" => trim($this->input->post('comment'))
			);
		$this->Donation_Model->createDonation($options_donation);
		redirect('/deck/view_name/'.$name['id']);
	}	

	public function view_name($name_id) {	
		$this->data['name'] = $this->Name_Model->getNameById($name_id);		
		$this->data['donations'] = $this->Donation_Model->getHydratedDonationsByNameId($name_id);
		$this->data['total_amount'] = $this->Donation_Model->getMoneyDonatedByNameId($name_id);
		$this->load->view('view_name', $this->data);
	}	

	
}
