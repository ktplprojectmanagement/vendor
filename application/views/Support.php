<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{		
		$this->load->view('header_view');
		$this->load->view('support_view');		
	}

	function send_mail()
	{
		$config = Array(       
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'employee.kritva@gmail.com',
            'smtp_pass' => 'kritva@123',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email',$config);
		$this->email->set_newline("\r\n");		     
		$this->email->from('mssadafule@gmail.com','Support');
		$this->email->to('mssadafule@gmail.com');
		$this->email->subject('Support Mail');		
		$data['vendor_id'] = $this->session->userdata('vendor_id');
		$data['msg'] = $_POST['message'];
		$data['mob_number'] = $_POST['mob_number'];
		$data['email_validate'] = $_POST['email_validate'];
		$data['vendor_name'] = $_POST['name'];
		$body = $this->load->view('welcome2.php',$data,TRUE);
		$this->email->message($body); 
		if ($this->email->send()) {
			echo "send";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */