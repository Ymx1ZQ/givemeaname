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
		$this->email->to('maolo.peola@gmail.com','maolo.peola@gmail.com');
		$this->email->subject('Date confirmed!');
		$this->email->set_mailtype("html");
		$this->email->message('you just confirmed your appointment with Paolo.' . $this->input->post('message') . ' Have fun!! <br/><br/>Sincerely,<br/>The MagicClick Team');
		$result = $this->email->send();
		if ($result) echo 'ciao';
		else echo 'boh';
	}

}
