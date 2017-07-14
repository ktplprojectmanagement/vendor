<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendorlist_user extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('common_model');
	}

	public function index()
	{
	    
$this->db->select('Vendor_id');
$this->db->from('vendor_details_update');
$this->db->where('updation_state =',1);
$data['vendor_details1'] = $this->db->get()->result_array();

$vendor_list = '';

for($i=0;$i<count($data['vendor_details1']);$i++)
{
if($vendor_list == '')
{
$vendor_list = $data['vendor_details1'][$i]['Vendor_id'];
}
else
{
$vendor_list = $vendor_list.','.$data['vendor_details1'][$i]['Vendor_id'];
}
}

$this->db->select('DISTINCT(vendor_id)');
$this->db->from('mail_record');
//$this->db->where("reminder_date !=",date('Y-m-d'));
//$this->db->where("reminder_date !=",'');
$this->db->where("Vendor_id NOT IN ($vendor_list)");
$data['already_sent_list2'] = $this->db->get()->result_array();

$vendor_list2 = '';

for($i=0;$i<count($data['already_sent_list2']);$i++)
{
if($vendor_list2 == '')
{
$vendor_list2 = $data['already_sent_list2'][$i]['vendor_id'];
}
else
{
$vendor_list2 = $vendor_list2.','.$data['already_sent_list2'][$i]['vendor_id'];
}
}

//print_r($this->session->userdata('purchaser_detail'));die();
$where = '(Purchaser_Email_ID="'.$this->session->userdata("vendor_email").'" or Sub_Purchaser_Email_ID = "'.$this->session->userdata("vendor_email").'")';

if($this->session->userdata('purchaser_detail') == '1')
{
$this->db->select('*');
$this->db->from('vendor_details');
//$this->db->limit(30);
//$this->db->where("Vendor_id IN ($vendor_list2)");
$this->db->where($where);
$data['vendor_details'] = $this->db->get()->result_array(); 
}
else if($this->session->userdata('purchaser_detail') == '2')
{
$this->db->select('*');
$this->db->from('vendor_details');
//$this->db->limit(30);
//$this->db->where("Vendor_id IN ($vendor_list2)");
$this->db->where($where);
$data['vendor_details'] = $this->db->get()->result_array();   
//print_r($this->session->userdata('vendor_email'));die();
}
else
{
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->limit(232,1883);
$data['vendor_details'] = $this->db->get()->result_array(); 
}

		$data['status'] = 'vendor_list';
		//print_r($data['state_details']);die();
		$this->load->view('admin_header_view',$data);
		$this->load->view('vendorlist_view_user',$data);
		$this->load->view('footer_view');
	}

	function get_vendor()
	{
 
               if($_POST['purch_id'] != '--Select--')
{
$where = 'where Purchaser_Email_ID = ?';
		//print_r($_POST['customer_id']);die();
		$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['purch_id']);
		$vendor_data = '';
			if (isset($data['user_details']) && count($data['user_details'])>0) {
			for ($i=0; $i < count($data['user_details']); $i++) { 
				if ($vendor_data == '') {
					$vendor_data = '
					<tr>
						<td><input type="checkbox" value='.$data['user_details'][$i]['Vendor_id'].'  id='.$data['user_details'][$i]['Vendor_id'].'></td>
						<td>'.$data['user_details'][$i]['Purchaser_Name'].'</td>
						<td>'.$data['user_details'][$i]['Vendor_id'].'</td>
						<td>'.$data['user_details'][$i]['Name'].'</td>
						<td>'.$data['user_details'][$i]['vendor_type'].'</td>
						<td>
							<form method="post" action='.base_url().'index.php/Vendordata">
								<input type="text" name="vendor_id" value='.$data['user_details'][$i]['Vendor_id'].'>
								<input type="submit" name="submit"  value="Check">
							</form>
						
						</td>
					</tr>';
				}
				else
				{
					$vendor_data = $vendor_data.'
					<tr>
						<td><input type="checkbox" value='.$data['user_details'][$i]['Vendor_id'].' id='.$data['user_details'][$i]['Vendor_id'].'></td>
						<td>'.$data['user_details'][$i]['Purchaser_Name'].'</td>
						<td>'.$data['user_details'][$i]['Vendor_id'].'</td>
						<td>'.$data['user_details'][$i]['Name'].'</td>
						<td>'.$data['user_details'][$i]['vendor_type'].'</td>
						<td>
							<form method="post" action='.base_url().'index.php/Vendordata">
								<input type="text" name="vendor_id" value='.$data['user_details'][$i]['Vendor_id'].'>
								<input type="submit" name="submit"  value="Check">
							</form>
						
						</td>
					</tr>';
				}
			}
		}
		else
		{
			$vendor_data = '<tr colspan="6"><td>No Record Found</td></tr>';
		}
}
else
{
$where = 'where 1';
		//print_r($_POST['customer_id']);die();
		$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$_POST['purch_id']);
		$vendor_data = '';
			if (isset($data['user_details']) && count($data['user_details'])>0) {
			for ($i=0; $i < count($data['user_details']); $i++) { 
				if ($vendor_data == '') {
					$vendor_data = '
					<tr>
						<td><input type="checkbox" value='.$data['user_details'][$i]['Vendor_id'].'  id='.$data['user_details'][$i]['Vendor_id'].'></td>
						<td>'.$data['user_details'][$i]['Purchaser_Name'].'</td>
						<td>'.$data['user_details'][$i]['Vendor_id'].'</td>
						<td>'.$data['user_details'][$i]['Name'].'</td>
						<td>'.$data['user_details'][$i]['vendor_type'].'</td>
						<td>
							<form method="post" action='.base_url().'index.php/Vendordata">
								<input type="text" name="vendor_id" value='.$data['user_details'][$i]['Vendor_id'].'>
								<input type="submit" name="submit"  value="Check">
							</form>
						
						</td>
					</tr>';
				}
				else
				{
					$vendor_data = $vendor_data.'
					<tr>
						<td><input type="checkbox" value='.$data['user_details'][$i]['Vendor_id'].' id='.$data['user_details'][$i]['Vendor_id'].'></td>
						<td>'.$data['user_details'][$i]['Purchaser_Name'].'</td>
						<td>'.$data['user_details'][$i]['Vendor_id'].'</td>
						<td>'.$data['user_details'][$i]['Name'].'</td>
						<td>'.$data['user_details'][$i]['vendor_type'].'</td>
						<td>
							<form method="post" action='.base_url().'index.php/Vendordata">
								<input type="text" name="vendor_id" value='.$data['user_details'][$i]['Vendor_id'].'>
								<input type="submit" name="submit"  value="Check">
							</form>
						
						</td>
					</tr>';
				}
			}
		}
		else
		{
			$vendor_data = '<tr colspan="6"><td>No Record Found</td></tr>';
		}
}

		
		print_r($vendor_data);die();
	}
	
    function update_email()
	{
	    $data['data2'] = array(
        'EMail_id' => $_POST['email'],
        'Vendor_id' => $_POST['vendor_id'],
        );
        //print_r($data);die();
        $table_name = 'vendor_details';
		$field_list = 'EMail_id = ?';
		$where = 'where Vendor_id = ?';
		$data['user_details2'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data2']);
	}

	function send_mails()
	{
		$list = explode('!',$_POST['vendor_value']);
		//print_r($list);die();
		if (count($list)>0) {
			foreach($list as $row) {
				$where = 'where Vendor_id = ?';
				//print_r($_POST['customer_id']);die();
				$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$row);
				//print_r($data['user_details']);die();
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
		        $this->load->library('email', $config);
		       
 $this->email->set_mailtype("html");
		     //print_r($data['user_details']);die();
		        $this->email->from('partners@vvfltd.com', 'VVF GST Team');
		       $data1 = array(
		             'Name'=> $data['user_details']['0']['Name'],
		             'vendor_id'=> $data['user_details']['0']['Vendor_id'],
		       );
		   $this->email->to(strtolower($data['user_details']['0']['EMail_id']));  // replace it with receiver mail id
$list = array($data['user_details']['0']['Purchaser_Email_ID'],$data['user_details']['0']['Sub_Purchaser_Email_ID']);
			    $this->email->cc($list);  // replace it with receiver mail id
$this->email->bcc('partners@vvfltd.com');
			    $this->email->subject('GST Verification'); // replace it with relevant subject
		       
		        $body = $this->load->view('welcome.php',$data1,TRUE);
		        $this->email->message($body); 
		        if ($this->email->send()) { 
		        	$data5 = array(
						'vendor_id' => $data['user_details']['0']['Vendor_id'], 
						'mail_sent' => '1',
						'changes_date' => date("Y-m-d h:i:s"),
                                                'reminder_date' => date("Y-m-d"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_sent,changes_date)';
					$qry = '(?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data5);
		        }
		        else
		        {
		        	$data5 = array(
						'vendor_id' => $data['user_details']['0']['Vendor_id'], 
						'mail_bounse' => '2',
						'changes_date' => date("Y-m-d h:i:s"),
'reminder_date' => date("Y-m-d"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_bounse,changes_date)';
					$qry = '(?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data5);
		        }
			}
		}
		else
		{
			echo "Please select vendor from list.";
		}
		
	}

function tech_send_mails()
	{
		$list = explode('!',$_POST['vendor_value']);
		//print_r($list);die();
		if (count($list)>0) {
			foreach($list as $row) {
				$where = 'where Vendor_id = ?';
				//print_r($_POST['customer_id']);die();
				$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$row);
				//print_r($data['user_details']);die();
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
		        $this->load->library('email', $config);
		       
 $this->email->set_mailtype("html");
		     //print_r($data['user_details']);die();
		        $this->email->from('partners@vvfltd.com', 'VVF GST Team');
		       $data1 = array(
		             'Name'=> $data['user_details']['0']['Name'],
		             'vendor_id'=> $data['user_details']['0']['Vendor_id'],
		       );
		   $this->email->to(strtolower($data['user_details']['0']['EMail_id']));  // replace it with receiver mail id
$list = array($data['user_details']['0']['Purchaser_Email_ID'],$data['user_details']['0']['Sub_Purchaser_Email_ID'],'rajeev.chaubal@vvfltd.com','partners@vvfltd.com');
			    //$this->email->cc($list);  // replace it with receiver mail id
$this->email->bcc('partners@vvfltd.com');
			    $this->email->subject('Technical Assistance in sharing GST registration details with VVF '); // replace it with relevant subject
		       
		        $body = $this->load->view('tech_support.php',$data1,TRUE);
		        $this->email->message($body); 
		        if ($this->email->send()) { 
		        	$data5 = array(
						'vendor_id' => $data['user_details']['0']['Vendor_id'], 
						'mail_sent' => '1',
						'changes_date' => date("Y-m-d h:i:s"),
                                                'reminder_date' => date("Y-m-d"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_sent,changes_date,reminder_date)';
					$qry = '(?,?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data5);
		        }
		        else
		        {
		        	$data5 = array(
						'vendor_id' => $data['user_details']['0']['Vendor_id'], 
						'mail_bounse' => '2',
						'changes_date' => date("Y-m-d h:i:s"),
'reminder_date' => date("Y-m-d"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_bounse,changes_date,reminder_date)';
					$qry = '(?,?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data5);
		        }
			}
		}
		else
		{
			echo "Please select vendor from list.";
		}
		
	}

function send_mails_pending()
	{
		$list = explode('!',$_POST['vendor_value']);
		//print_r($list);die();
		if (count($list)>0) {
			foreach($list as $row) {
				$where = 'where Vendor_id = ?';
				//print_r($_POST['customer_id']);die();
				$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$row);
				//print_r($data['user_details']);die();
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
		        $this->load->library('email', $config);
		       
 $this->email->set_mailtype("html");
		     //print_r($data['user_details']);die();
		        $this->email->from('partners@vvfltd.com', 'VVF GST Team');
		       $data1 = array(
		             'Name'=> $data['user_details']['0']['Name'],
		             'vendor_id'=> $data['user_details']['0']['Vendor_id'],
		       );
		   $this->email->to(strtolower($data['user_details']['0']['EMail_id']));  // replace it with receiver mail id
$list = array($data['user_details']['0']['Purchaser_Email_ID'],$data['user_details']['0']['Sub_Purchaser_Email_ID'],'rajeev.chaubal@vvfltd.com','partners@vvfltd.com');
			    //$this->email->cc($list);  // replace it with receiver mail id
$this->email->bcc('partners@vvfltd.com');
			    $this->email->subject('GST Verification'); // replace it with relevant subject
		       
		        $body = $this->load->view('welcome.php',$data1,TRUE);
		        $this->email->message($body); 
		     
			}
		}
		else
		{
			echo "Please select vendor from list.";
		}
		
	}


	function New_login($vendor_id = null)
	{
		//print_r($vendor_id);die();
		$this->session->set_userdata('username',$vendor_id);
	}

	function print_data()
	{
		// /$this->session->set_userdata('username_new','1');
		print_r($this->session->userdata('username'));
	}
}