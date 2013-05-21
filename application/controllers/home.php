<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{	
		$this->data['my_name'] = "paolo";
		$this->load->view('home', $this->data);
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('signup');
	}
	public function about()
	{
		$this->load->view('about');
	}
}
