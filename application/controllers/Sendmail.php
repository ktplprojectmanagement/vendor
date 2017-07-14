<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
		//$this->load->library('email');
	}

	public function index()
	{
		// $ci = get_instance();
		// $ci->load->library('email');
		// $config = Array(
		//     'protocol' => 'smtp',
		//     'smtp_host' => 'smtp.gmail.com',
		//     'smtp_port' => 465,
		//     'smtp_user' => 'mssadafule@gmail.com',
		//     'smtp_pass' => 'ltsxfwvqifmustly',
		//     'mailtype'  => 'html', 
		//     'charset'   => 'iso-8859-1'
		// );
		// $ci->email->initialize($config);

		// $ci->email->from('mssadafule@gmail.com', 'Blabla');
		// $list = array('mssadafule@gmail.com');
		// $ci->email->to($list);
		// $this->email->reply_to('mssadafule@gmail.com', 'Explendid Videos');
		// $ci->email->subject('This is an email test');
		// $ci->email->message('It is working. Great!');

		// //$result = $this->email->send();		
		// // $this->email->from('mssadafule@gmail.com', 'Monica');
		// // $this->email->to('mssadafule@gmail.com');
		 
		// // $this->email->subject('Email Test');
		// // $this->email->message('Testing the email class.');
		// if ($ci->email->send()) {
		// 	print_r("In");die();
		// }
		// else
		// {
		// 	print_r("Out");die();
		// }
		$this->load->library('email'); 
		  $this->email->from('mssadafule@gmail.com', 'Sender Name');
		  $this->email->to('mssadafule@gmail.com','Recipient Name');
		  $this->email->subject('Your Subject');
		  $this->email->message('Your Message'); 
		  try{
		    $this->email->send();
		    echo 'Message has been sent.';
		  }catch(Exception $e){
		    echo $e->getMessage();
		  }
	}
}