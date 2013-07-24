<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class Love extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
	}

	public function index() {
		$this->email->from('team@givemeaname.org', 'GiveMeAName Team');
		$this->email->to('paolo.meola@gmail.com','paolo.meola@gmail.com');
		$this->email->subject('Login information changed on givemeaname.org!');
		$this->email->set_mailtype("html");
		$this->email->message($this->input->post('message'));
		$result = $this->email->send();
		if ($result) echo 'ciao';
		else echo 'boh';
	}

}
