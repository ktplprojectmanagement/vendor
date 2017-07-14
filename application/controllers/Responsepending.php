<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Responsepending extends CI_Controller {

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
$this->db->where('updation_state != 1');
$data['vendor_details1'] = $this->db->get()->result_array();

$vendor_list = '';

for($i=0;$i<count($data['vendor_details1']);$i++)
{
$this->db->select('DISTINCT(vendor_id)');
$this->db->from('mail_record');
$this->db->where('Vendor_id = '.$data['vendor_details1'][$i]['Vendor_id'].' and reminder_date != '.date('Y-m-d'));
$data['already_sent_list2'] = $this->db->get()->result_array();

if($data['already_sent_list2'] != '' && $data['already_sent_list2']>0)
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
}

//print_r($vendor_list);die();

$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where("Vendor_id IN ($vendor_list)");
$data['vendor_pending_list'] = $this->db->get()->result_array();

$data['pending_val'] = 0;

		$this->load->view('admin_header_view',$data);
		$this->load->view('vendorlist_view_pending',$data);
		//$this->load->view('footer_view');
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

	function send_mails()
	{
		$list = explode('!',$_POST['vendor_value']);
		//print_r($list);die();
		if (count($list)>0) {
			for ($i=0; $i < count($list); $i++) { 
				$where = 'where Vendor_id = ?';
				//print_r($_POST['customer_id']);die();
				$data['user_details'] = $this->common_model->fetch_data('vendor_details',$where,$list[$i]);
				//print_r($data['user_details']);die();
				$config = Array(
		            'protocol' => 'smtp',
		            'smtp_host' => 'smtp.office365.com',
		            'smtp_port' => 587,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'vvfltd@123',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'tls'
		        );
		        $this->load->library('email', $config);
		       
 $this->email->set_mailtype("html");
		     //print_r($data['user_details']['0']['EMail_id']);die();
		        $this->email->from('partners@vvfltd.com', 'GST');
		       $data1 = array(
		             'Name'=> $data['user_details']['0']['Name'],
		             'vendor_id'=> $data['user_details']['0']['Vendor_id'],
		       );
		   $this->email->to(strtolower($data['user_details']['0']['EMail_id']));  // replace it with receiver mail id
$list = array($data['user_details']['0']['Purchaser_Email_ID'],$data['user_details']['0']['Sub_Purchaser_Email_ID'],'rajeev.chaubal@vvfltd.com','partners@vvfltd.com');
			    $this->email->cc($list);  // replace it with receiver mail id
			    $this->email->subject('GST Verification'); // replace it with relevant subject
		       
		        $body = $this->load->view('welcome.php',$data1,TRUE);
		        $this->email->message($body); 
		        if ($this->email->send()) { print_r("in");die();
		        	$data['data'] = array(
						'vendor_id' => $list[$i], 
						'mail_sent' => '1',
						'changes_date' => date("Y-m-d h:i:s"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_sent,changes_date)';
					$qry = '(?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
		        }
		        else
		        {
		        	$data['data'] = array(
						'vendor_id' => $list[$i], 
						'mail_bounse' => '1',
						'changes_date' => date("Y-m-d h:i:s"),
					);
		        	$table_name = 'mail_record';
					$field_list = '(vendor_id,mail_bounse,changes_date)';
					$qry = '(?,?,?)';
		        	$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
		        }
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