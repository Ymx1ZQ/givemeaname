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
        		
	}
	public function index()
	{	
		$this->data['my_name'] = "paolo";
		$this->load->view('home', $this->data);
	}
	public function login()
	{
  echo "hello world";
	}
}
