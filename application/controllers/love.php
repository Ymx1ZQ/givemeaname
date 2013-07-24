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
		$this->email->from('MagicClick', 'MagicClick');
		$this->email->to('paolo.meola@gmail.com','paolo.meola@gmail.com');
		$this->email->cc('maolo.peola@gmail.com','maolo.peola@gmail.com');
		$this->email->subject('Date confirmed!');
		$this->email->set_mailtype("html");
		$this->email->message('Hello Sanita,<br/>you just confirmed your appointment with Paolo.<br/><br/> The appointment is on ' . $this->input->post('message') . '!<br/>Have fun!! <br/><br/>Sincerely,<br/>The MagicClick Team');
		$result = $this->email->send();
		if ($result) echo 'ciao';
		else echo 'boh';
	}

}
