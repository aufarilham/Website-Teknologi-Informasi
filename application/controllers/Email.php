<?php 

class Email extends Controller
{
	
	function _constru()
	{
		parent::Controller();
	}

	function index()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.goglemail.com',
			'smtp_port' => 465,
			'smtp_user' =>'senjadijakarta@gmail.com',
			'smtp_pass' => 'pangopang'
		);

		$this->load->library('email', $config);
		$this->email->set_newLine("\r\n");

		$this->email->from('x','y');
		$this->email->to('senjadijakarta@gmail.com');
		$this->email->subject('This is an email test');
		$this->email->message('it is working. Great!');

		if($this->email->send())
		{
			echo 'Your email was send';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}

 ?>