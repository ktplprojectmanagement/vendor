<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendorlogin extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

public function New_login($vendor_id = null,$id=null)
	{
		$data['state_details'] = $this->common_model->get_all_data('state_code_list');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$this->session->set_userdata('username',$vendor_id);

$where = 'where vendor_id = ?';
		$data['pass_details'] = $this->common_model->fetch_data('forget_pass_check',$where,$vendor_id);
$where = 'where vendor_id = ?';
		$data['vendor_login_details'] = $this->common_model->fetch_data('vendor_login',$where,$vendor_id);

$where = 'where Vendor_id = ?';
				//print_r($_POST['customer_id']);die();
		$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$this->session->userdata('username'));


if($id=='')
{
if(isset($data['pass_details']['0']['date']) && date('Y-m-d')>$data['pass_details']['0']['date'])
	{
	$this->load->view('Adminlogin_view',$data);
	}
	else
	{
	$where = 'where Vendor_id = ?';
					//print_r($_POST['customer_id']);die();
			$data['user_details1'] = $this->common_model->fetch_data('vendor_details_update',$where,$this->session->userdata('username'));

					$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$this->session->userdata('username'));
			$this->load->view('New_login',$data);
			//$this->load->view('footer_view');
	}
}
else
{
	if((isset($data['vendor_login_details']['0']['chk_set']) && $data['vendor_login_details']['0']['chk_set'] == 2))
	{
	$this->load->view('Adminlogin_view',$data);
	}
	else
	{
	$where = 'where Vendor_id = ?';
					//print_r($_POST['customer_id']);die();
			$data['user_details1'] = $this->common_model->fetch_data('vendor_details_update',$where,$this->session->userdata('username'));

					$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$this->session->userdata('username'));
			$this->load->view('New_login',$data);
			//$this->load->view('footer_view');
	}
}	
}


	function create()
	{
		$where = 'where vendor_id = ?';
		$data['user_details'] = $this->common_model->fetch_data('vendor_login',$where,$_POST['vendor_id']);
//print_r($data['user_details']);die();
		if (isset($data['user_details']) && count($data['user_details'])>0) {
			$where = 'where Vendor_id = ?';
			$data['user_details1'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['vendor_id']);
//print_r($data['user_details1']['0']['Vendor_id']);die();
						$data['data'] = array(
							'password' => isset($_POST['password']) ? $_POST['password'] : NULL,
							
'chk_set' => '2',
'vendor_id' => isset($data['user_details1']['0']['Vendor_id']) ? $data['user_details1']['0']['Vendor_id'] : NULL,
						);
//print_r($data['data']);die();
				$table_name = 'vendor_login';
				$field_list = 'password = ?,chk_set = ?';
				$where = 'where vendor_id = ?';
				$data['user_details2'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);
				if($this->db->affected_rows()>0)
				{
					echo "reset";
				}
				else
				{
					echo "error";
				}
		}
		else
		{
			$data['data'] = array(
				'username' => isset($_POST['username']) ? $_POST['username'] : NULL, 
				'password' => isset($_POST['password']) ? $_POST['password'] : NULL,
'chk_set' => '2',
				'changes_date' => date("Y-m-d h:i:s"),										
			);
			$table_name = 'vendor_login';
			$field_list = '(username,password,chk_set,changes_date)';
			$qry = '(?,?,?,?)';
			$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
			if($this->db->affected_rows()>0)
			{
				echo "added";
			}
			else
			{
				echo "error";
			}
		}
	}

	function check()
	{
		$query = "where vendor_id = ? and password = ? and check_val != ?";
		$data = array(
			'vendor_id' => isset($_POST['username']) ? $_POST['username'] : NULL, 
			'password' => isset($_POST['password']) ? $_POST['password'] : NULL,	
                        'check_val' => 1,	
		);
		$data['edit_user_details'] = $this->common_model->fetch_data('vendor_login',$query,$data);
		$this->session->set_userdata('username',$_POST['username']);
$query = "where vendor_id = ? and password = ? and check_val = ?";
$data2 = array(
			'vendor_id' => isset($_POST['username']) ? $_POST['username'] : NULL, 
			'password' => isset($_POST['password']) ? $_POST['password'] : NULL,	
                        'check_val' => 1,	
		);
		$data['edit_user_details2'] = $this->common_model->fetch_data('vendor_login',$query,$data2);
		if (count($data['edit_user_details'])>0) {
			$where = 'where vendor_id = ?';
				//print_r($_POST['customer_id']);die();
			$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['username']);
			$this->session->set_userdata('vendor_email',$_POST['username']);
			$this->session->set_userdata('vendor_id',$data['user_details']['0']['Vendor_id']);
			echo "added";
		}
		else if(count($data['edit_user_details2'])>0)
		{
			echo "error1";
		}
else 
		{
			echo "error";
		}
	}

        
	function check1()
	{
		$query = "where username = ? and password = ?";
		$data = array(
			'username' => isset($_POST['username']) ? $_POST['username'] : NULL, 
			'password' => isset($_POST['password']) ? $_POST['password'] : NULL,		
		);
		$data['edit_user_details'] = $this->common_model->fetch_data('admin_login',$query,$data);

		$this->session->set_userdata('username',$_POST['username']);
		if (count($data['edit_user_details'])>0) {
			$where = 'where EMail_id = ?';
				//print_r($_POST['customer_id']);die();
			$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['username']);
                        $where = 'where Sub_Purchaser_Email_ID = ?';
				//print_r($_POST['customer_id']);die();
			$data['user_details1'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['username']);
$where = 'where Purchaser_Email_ID = ?';
				//print_r($_POST['customer_id']);die();
			$data['Sub_user_details2'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['username']);
//print_r($data['user_details']);die();
                        if($data['edit_user_details']['0']['flag'] == '1')
{
$this->session->set_userdata('purchaser_detail','1');
}
else if(count($data['Sub_user_details2'])>0)
{
$this->session->set_userdata('purchaser_detail','2');
}
else
{
$this->session->set_userdata('purchaser_detail','0');
}
//print_r($this->session->userdata('purchaser_detail'));die();
		$this->session->set_userdata('vendor_email',$_POST['username']);
			//$this->session->set_userdata('vendor_id',$data['user_details']['0']['Vendor_id']);
			echo "added";
		}
		else
		{
			echo "error";
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */