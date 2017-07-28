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
$data['sap_state'] = $this->common_model->get_all_data('sap_state');		
		$this->load->view('header_view');
		$this->load->view('support_view',$data);		
	}

	function send_mail()
	{
		$config = Array(
		            'protocol' => 'smtp',
		            'smtp_host' => 'outlook.office365.com',
		            'smtp_port' => 995,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'vvfltd@123',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'ssl'
		        );
        $this->load->library('email',$config);
		$this->email->set_newline("\r\n");	
$this->email->set_mailtype("html");	
$this->email->from('partners@vvfltd.com','Support Mail From '.$this->session->userdata('vendor_id'));
		$this->email->to('rajeev.chaubal@vvfltd.com');
$list = array('partners@vvfltd.com','rupesh.acharekar@vvfltd.com');
$this->email->cc($list);
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