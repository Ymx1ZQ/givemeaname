<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class Love extends Controller {

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
		$this->load->helper('url');		
	}

	public function index() {
		$this->email->from('team@givemeaname.org', 'GiveMeAName Team');
		$this->email->to('paolo.meola@gmail.com','paolo.meola@gmail.com');
		$this->email->subject('Login information changed on givemeaname.org!');
		$this->email->set_mailtype("html");
		$this->email->message('content');
		$result = $this->email->send();
		if ($result) echo 'ciao';
		else echo 'boh';
	}

}
