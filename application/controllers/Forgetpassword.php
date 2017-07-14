<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forgetpassword extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('common_model');
	}

	public function index()
	{		
		//$this->load->view('header_view');
		$this->load->view('forget_password_view');
	}

	// public function link()
	// {		
	// 	//$this->load->view('header_view');
	// 	$this->load->view('forget_password_view1');
	// }

	function send_mail()
	{
		$config = Array(
		            'protocol' => 'POP',
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
		$this->email->from('partners@vvfltd.com','Forgot Password');
		$this->email->subject('Forgot Password');
		$where = 'where Vendor_id = ?';
		$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['email_id']);
		
		if(isset($data['user_details']) && count($data['user_details'])>0 && isset($data['user_details']['0']['Vendor_id']))
		{
$this->email->to($data['user_details']['0']['EMail_id']);
$val = $data['user_details']['0']['Vendor_id'];
			$data = array(
			'vendor_id' => $data['user_details']['0']['Vendor_id'],
'name' => $data['user_details']['0']['Name']
			);
			$body = $this->load->view('welcome1.php',$data,TRUE);
			$this->email->message($body); 
			if ($this->email->send()) {
$where = 'where email_on_gst = ?';
		$data['user_details'] = $this->common_model->fetch_data('vendor_details_update',$where,$_POST['email_id']);

$where = 'where vendor_id = ?';
		$data['pass_details'] = $this->common_model->fetch_data('forget_pass_check',$where,$val);

if(isset($data['pass_details']) && count($data['pass_details'])>0)
{
$data['data2'] = array(
'date' => date('Y-m-d'),
'vendor_id' => $val,
);
$table_name = 'forget_pass_check';
				$field_list = 'date = ?';
				$where = 'where vendor_id = ?';
				$data['user_details2'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data2']);
}
else
{
$data['data2'] = array(	
'date' => date('Y-m-d'),
'vendor_id' => $val,				
);
				//print_r($data['data']);die();
				$table_name = 'forget_pass_check';
				$field_list = '(date,vendor_id)';
				$qry = '(?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data2']);
}

				echo "send";
			}
		}
		else
		{
			echo "Please enter email id same as gst email id.";
		}
		
	}
}