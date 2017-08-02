<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendordata extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{
		$data['state_details'] = $this->common_model->get_all_data('state_code_list');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
$data['sap_state'] = $this->common_model->get_all_data('sap_state');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$vendor_id = '';
if(isset($_POST['vendor_id']))
{
$this->session->set_userdata('vendor_data',$_POST['vendor_id']);
}
		$this->session->set_userdata('username',$vendor_id);
		//print_r($_POST['vendor_id']);die();
		$query = 'where Vendor_id = ?';
		$data['edit_user_details'] = $this->common_model->fetch_data('vendor_details',$query,$this->session->userdata('vendor_data'));
		$query = 'where Vendor_id = ?';
		$data['edit_user_details1'] = $this->common_model->fetch_data('vendor_details_update',$query,$this->session->userdata('vendor_data'));
		//print_r($data['edit_user_details1']);die();
		$this->load->view('header_view');
		$this->load->view('vendor_detail_view',$data);
		//$this->load->view('footer_view');
	}

	function update_remark()
	{
		if (isset($_POST['status']) && $_POST['status'] == '1') {
			$data['data'] = array(
				'updation_state' => '1',			
				'updation_date' => date("Y-m-d h:i:s"),
				'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,				
			);
$data['data1'] = array(
				'check_val' => '1',
'vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,	
			);

$table_name = 'vendor_login';
		$field_list = 'check_val = ?';
		$where = 'where vendor_id = ?';
		$data['check'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data1']);
		}
else if (isset($_POST['status']) && $_POST['status'] == '2') {
			$data['data'] = array(
				'updation_state' => '2',			
				'updation_date' => date("Y-m-d h:i:s"),
				'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,				
			);
		}
		else
		{
			$data['data'] = array(
				'updation_state' => '0',			
				'updation_date' => date("Y-m-d h:i:s"),
				'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,				
			);
		}
		//print_r($data['data']);die();
		$table_name = 'vendor_details_update';
		$field_list = 'updation_state = ?,updation_date = ?';
		$where = 'where Vendor_id = ?';
		$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);

$query = 'where Vendor_id = ?';
			$data['mail_recive_data'] = $this->common_model->fetch_data('vendor_details',$query,$_POST['vendor_id']);

	//print_r($field_list);die();	
		if($this->db->affected_rows()>0)
		{
		    	$data_field['data'] = array(
					'Vendor_id' => $_POST['vendor_id'],
					'rejected_field' => $_POST['points_value'],
					'reason' => $_POST['remark_value']
				);
				//print_r($data['data']);die();
				$table_name = 'rejection_data';
				$field_list = '(Vendor_id,rejected_field,reason)';
				$qry = '(?,?,?)';
				$data['user_details_reject'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data_field['data']);
			
			$config = Array(       
		            'protocol' => 'smtp',
		            'smtp_host' => 'outlook.office365.com',
		            'smtp_port' => 993,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'Dream@21',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'ssl'
		        );
		        $this->load->library('email', $config);
		        $this->email->set_newline("\r\n");
		     $this->email->set_mailtype("html");  
		        $this->email->from('partners@vvfltd.com', 'VVF GST Team');			      
		   
			    $this->email->to($data['mail_recive_data']['0']['EMail_id']);  // replace it with receiver mail id
			    		   $this->email->to(strtolower($data['user_details']['0']['EMail_id']));  // replace it with receiver mail id
$list = array($data['mail_recive_data']['0']['Purchaser_Email_ID'],$data['mail_recive_data']['0']['Sub_Purchaser_Email_ID'],'partners@vvfltd.com');
			    $this->email->cc($list);  // replace it with receiver mail id
			    //$this->email->cc('partners@vvfltd.com');  // replace it with receiver mail id
			    $this->email->subject('VVF GST Verification : corrections required'); // replace it with relevant subject
                         
		       $data2 = array(
                         'msg' => $_POST['remark_value'],
'points_value' => $_POST['points_value'],
'Vendor_id' => $data['mail_recive_data']['0']['Vendor_id'],
'name' => $data['mail_recive_data']['0']['Name'],
);
//print_r($data2);die();
		        $body = $this->load->view('admin_reject.php',$data2,TRUE);
		        $this->email->message($body); 
		        $this->email->send();
			echo "added";
		}
		else
		{
			echo "error";
		}
	}

function update_remark_aprv()
	{
		if (isset($_POST['status']) && $_POST['status'] == '1') {
			$data['data'] = array(
				'updation_state' => '1',			
				'updation_date' => date("Y-m-d h:i:s"),
				'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,				
			);
$data['data1'] = array(
				'check_val' => '1',
'vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,	
			);

$table_name = 'vendor_login';
		$field_list = 'check_val = ?';
		$where = 'where vendor_id = ?';
		$data['check'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data1']);
		}
		else
		{
			$data['data'] = array(
				'updation_state' => '0',			
				'updation_date' => date("Y-m-d h:i:s"),
				'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,				
			);
		}
		//print_r($data['data']);die();
		$table_name = 'vendor_details_update';
		$field_list = 'updation_state = ?,updation_date = ?';
		$where = 'where Vendor_id = ?';
		$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);

$query = 'where Vendor_id = ?';
			$data['mail_recive_data'] = $this->common_model->fetch_data('vendor_details',$query,$_POST['vendor_id']);

	//print_r($field_list);die();	
		if($this->db->affected_rows()>0)
		{
			$config = Array(       
		            'protocol' => 'smtp',
		            'smtp_host' => 'outlook.office365.com',
		            'smtp_port' => 993,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'Dream@21',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'ssl'
		        );
		        $this->load->library('email', $config);
		        $this->email->set_newline("\r\n");
		     $this->email->set_mailtype("html");  
		        $this->email->from('partners@vvfltd.com', 'VVF GST Team');			      
		   
			    $this->email->to($data['mail_recive_data']['0']['EMail_id']);  // replace it with receiver mail id
			    $list = array($data['mail_recive_data']['0']['Purchaser_Email_ID'],$data['mail_recive_data']['0']['Sub_Purchaser_Email_ID'],'partners@vvfltd.com','it.gst@vvfltd.com');
//$this->email->cc($list);
$this->email->bcc($list);
			    $this->email->subject('Vendor is approved by Indirect tax.'); // replace it with relevant subject
                         
		       $data2 = array(
'Vendor_id' => $data['mail_recive_data']['0']['Vendor_id'],
'name' => $data['mail_recive_data']['0']['Name'],
);
//print_r($data2);die();
		        $body = $this->load->view('admin_aprv.php',$data2,TRUE);
		        $this->email->message($body); 
		        $this->email->send();
			echo "added";
		}
		else
		{
			echo "error";
		}
	}

function mailme()
{
	$config = Array(       
		            'protocol' => 'smtp',
		            'smtp_host' => 'smtp.office365.com',
		            'smtp_port' => 587,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'Dream@21',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'tls'
		        );

		        $this->load->library('email', $config);
		        $this->email->set_newline("\r\n");
		    $this->email->set_mailtype("html");  
		       $this->email->from('partners@vvfltd.com', 'VVF GST Team');	
			    $this->email->to('demo.appraisel@gmail.com'); 

			    $this->email->subject('We have received your details'); // replace it with relevant subject
             
		        //$body = $this->load->view('thank_you.php',$data2,TRUE);
		        $this->email->message("gfhgfgh"); 
		        if($this->email->send())
		        {
		        	echo "sent";
		        }
		        else
		        {
		        	echo "not sent";
		        }
		       // $this->email->send();
}

function send_approval()
{
$config = Array(       
		            'protocol' => 'smtp',
		            'smtp_host' => 'smtp.office365.com',
		            'smtp_port' => 587,
		            'smtp_user' => 'partners@vvfltd.com',
		            'smtp_pass' => 'Dream@21',
'newline'  => "\r\n",
'crlf' => "\r\n",
'smtp_crypto' => 'tls'
		        );

$where = 'where Vendor_id = ?';
		$data['user_details1'] = $this->common_model->fetch_data('vendor_details',$where,$this->session->userdata('vendor_id'));
//print_r($data['user_details1']['0']);die();
		        $this->load->library('email', $config);
		        $this->email->set_newline("\r\n");
		    $this->email->set_mailtype("html");  
		       $this->email->from('partners@vvfltd.com', 'VVF GST Team');				      
		   //print_r($data['user_details1']['0']['EMail_id']);die();
			    $this->email->to($data['user_details1']['0']['EMail_id']);  // replace it with receiver mail id
$list = array($data['user_details1']['0']['EMail_id'],$data['user_details1']['0']['Purchaser_Email_ID'],$data['user_details1']['0']['Sub_Purchaser_Email_ID'],'partners@vvfltd.com','rajeev.chaubal@vvfltd.com','rupesh.acharekar@vvfltd.com');
//$this->email->cc($list);
$this->email->bcc($list);
			    $this->email->subject('We have received your details'); // replace it with relevant subject
              //print_r($data['user_details1']['0']['Sub_Purchaser_Email_ID']);die();           
		       $data2 = array(
'Name'=> $data['user_details1']['0']['Name'],
'vendor_id' => $_POST['vendor_id']
);
		        $body = $this->load->view('thank_you.php',$data2,TRUE);
		        $this->email->message($body); 
		        $this->email->send();

$data['data1'] = array(
				'updation_state' => '0',
'Vendor_id' => isset($_POST['vendor_id']) ? $_POST['vendor_id'] : NULL,	
			);

$table_name = 'vendor_details_update';
		$field_list = 'updation_state = ?';
		$where = 'where Vendor_id = ?';
		$data['check'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data1']);
}

    function del_file()
	{
		$table_name = 'vendor_details_update';
		if($_POST['id'] == 'gst_proof')
		{
		$data['data'] = array(
							
		'gst_proof' => '',	
		'Vendor_id' => $_POST['vendor_id']				
						);
						//print_r($data['data']);die();
						$field_list = 'gst_proof = ?';
						$where = 'where Vendor_id = ?';
						$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
		}
else if($_POST['id'] == 'pan_proof')
{
$data['data'] = array(
							
		'pan_proof' => '',	
		'Vendor_id' => $_POST['vendor_id']				
						);
						//print_r($data['data']);die();
						$field_list = 'pan_proof = ?';
						$where = 'where Vendor_id = ?';
						$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
}
else if($_POST['id'] == 'gst_declr')
{
$data['data'] = array(
							
		'gst_declr' => '',	
		'Vendor_id' => $_POST['vendor_id']				
						);
						//print_r($data['data']);die();
						$field_list = 'gst_declr = ?';
						$where = 'where Vendor_id = ?';
						$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
}
    }
	function update_data()
	{
		//print_r("sadasdsa");die();
		$gst_name="";$pan_name = '';$gst_declr = '';
		if (isset($_FILES['gst_proof']['name'])) {
				$config['upload_path']   = 'uploaded_doc/'; 
		         $config['allowed_types'] = 'gif|jpg|png'; 
		         $config['max_size']      = 100; 
		         $config['max_width']     = 1024; 
		         $config['max_height']    = 768;  
		         $config['file_name'] = $_FILES['gst_proof']['name'];
		         $this->load->library('upload', $config);
					
		         if ( ! $this->upload->do_upload('gst_proof')) {
		            // $error = array('error' => $this->upload->display_errors()); 
		            // $this->load->view('upload_form', $error); 
		         }
		         $ext = pathinfo($_FILES['gst_proof']['name'], PATHINFO_EXTENSION);
		         $filenamekey = md5(uniqid($_FILES['gst_proof']['name'], true)); 
		         $img_name = $filenamekey.'.'.$ext;
		         $gst_name = $img_name;
		         if (move_uploaded_file($_FILES['gst_proof']['tmp_name'],'proof/gst/'.$img_name)) {
				    //echo "Uploaded";die();
				} else {
				   //echo "File was not uploaded";die();
				}
		}

			if (isset($_FILES['gst_declr']['name'])) {
				$config['upload_path']   = 'uploaded_doc/'; 
		         $config['allowed_types'] = 'gif|jpg|png'; 
		         $config['max_size']      = 100; 
		         $config['max_width']     = 1024; 
		         $config['max_height']    = 768;  
		         $config['file_name'] = $_FILES['gst_declr']['name'];
		         $this->load->library('upload', $config);
					
		         if ( ! $this->upload->do_upload('gst_proof')) {
		            // $error = array('error' => $this->upload->display_errors()); 
		            // $this->load->view('upload_form', $error); 
		         }
		         $ext = pathinfo($_FILES['gst_declr']['name'], PATHINFO_EXTENSION);
		         $filenamekey = md5(uniqid($_FILES['gst_declr']['name'], true)); 
		         $img_name = $filenamekey.'.'.$ext;
		         $gst_declr = $img_name;
		         if (move_uploaded_file($_FILES['gst_declr']['tmp_name'],'proof/declaration/'.$img_name)) {
				    //echo "Uploaded";die();
				} else {
				   //echo "File was not uploaded";die();
				}
		}
//print_r($_POST['pan_gst_prf']);die();
		if (isset($_FILES['pan_proof']['name'])) {
				$config['upload_path']   = 'uploaded_doc/'; 
		         $config['allowed_types'] = 'gif|jpg|png'; 
		         $config['max_size']      = 100; 
		         $config['max_width']     = 1024; 
		         $config['max_height']    = 768;  
		         $config['file_name'] = $_FILES['pan_proof']['name'];
		         $this->load->library('upload', $config);
					
		         if ( ! $this->upload->do_upload('pan_proof')) {
		            // $error = array('error' => $this->upload->display_errors()); 
		            // $this->load->view('upload_form', $error); 
		         }
		         $ext = pathinfo($_FILES['pan_proof']['name'], PATHINFO_EXTENSION);
		         $filenamekey = md5(uniqid($_FILES['pan_proof']['name'], true)); 
		         $img_name = $filenamekey.'.'.$ext;
		         $pan_name = $img_name;
		         if (move_uploaded_file($_FILES['pan_proof']['tmp_name'],'proof/pan/'.$img_name)) {
				    //echo "Uploaded";die();
				} else {
				   //echo "File was not uploaded";die();
				}
		}
		date_default_timezone_set('Asia/Kolkata'); 
		//print_r($_POST['gst_data_save']);die();
		if($_POST['gst_data_save'] == 'gst_data_save1')
		{
			// print_r("ghfghf");die();
			$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
			//print_r($data['user_details']);die();
			if(count($data['user_details'])>0)
			{
				if(isset($_POST['gst_prf_data']) && $_POST['gst_prf_data'] == 0)
				{
				$data['data'] = array(
									'GST_number' => isset($_POST['gst_number']) ? $_POST['gst_number'] : NULL,
									'legal_name_on_gst' => isset($_POST['legal_name_gst']) ? $_POST['legal_name_gst'] : NULL,
									'State_Code_gst' => isset($_POST['state_code']) ? $_POST['state_code'] : NULL,
									'state_name_on_gst' => isset($_POST['state_gst']) ? $_POST['state_gst'] : NULL,
									'email_on_gst' => isset($_POST['email_gst']) ? $_POST['email_gst'] : NULL,
									'mobile_num_on_gst' => isset($_POST['mobile_gst']) ? $_POST['mobile_gst'] : NULL,
									'service_provider_on_gst' => isset($_POST['service_provider_gst']) ? $_POST['service_provider_gst'] : NULL,
									'TAX_number' => isset($_POST['Tax_Classification']) ? $_POST['Tax_Classification'] : NULL,
									// 'vendor_classification' => isset($_POST['vendor_Classification']) ? $_POST['vendor_Classification'] : NULL,
									'nature_of_invoice' => isset($_POST['nature_of_invoice']) ? $_POST['nature_of_invoice'] : NULL,
									'Composition_Scheme_Applicability' => isset($_POST['compo_scheme']) ? $_POST['compo_scheme'] : NULL,
									'gst_vendor' => isset($_POST['gst_vendor']) ? $_POST['gst_vendor'] : NULL,
				 'gst_applicable' => $_POST['gst_applicable'],
'gst_house_number' => $_POST['gst_house_number'],
'gst_street_2' => $_POST['gst_street_1'],
'gst_street_3' => $_POST['gst_street_2'],
'gst_street_4' => $_POST['gst_street_3'],
'gst_street_5' => $_POST['gst_street_4'],
'gst_street_6' => $_POST['gst_street_5'],
'gst_country_code' => $_POST['gst_country'],
'gst_city' => $_POST['gst_City'],
'gst_district' => $_POST['gst_district'],
'gst_postal' => $_POST['gst_postal_code'],
'service_provider' => isset($_POST['service_provider']) ? $_POST['service_provider'] : NULL,
									'Vendor_id' => $_POST['vendor_id']				
								);
								//print_r($data['data']);die();
								$field_list = 'GST_number = ?,legal_name_on_gst = ?,State_Code_gst = ?,state_name_on_gst = ?,email_on_gst = ?,mobile_num_on_gst = ?,service_provider_on_gst = ?,TAX_number = ?,nature_of_invoice = ?,Composition_Scheme_Applicability = ?,gst_vendor = ?,gst_applicable = ?,gst_house_number = ?,gst_street_2 = ?,gst_street_3 = ?,gst_street_4 = ?,gst_street_5 = ?,gst_street_6 = ?,gst_country_code = ?,gst_city = ?,gst_district = ?,gst_postal = ?,service_provider = ?';
								$where = 'where Vendor_id = ?';
								$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);
								//print_r($data['user_details']);die();	
				}
				else
				{
				$data['data'] = array(
									'GST_number' => isset($_POST['gst_number']) ? $_POST['gst_number'] : NULL,
									'legal_name_on_gst' => isset($_POST['legal_name_gst']) ? $_POST['legal_name_gst'] : NULL,
									'State_Code_gst' => isset($_POST['state_code']) ? $_POST['state_code'] : NULL,
									'state_name_on_gst' => isset($_POST['state_gst']) ? $_POST['state_gst'] : NULL,
									'email_on_gst' => isset($_POST['email_gst']) ? $_POST['email_gst'] : NULL,
									'mobile_num_on_gst' => isset($_POST['mobile_gst']) ? $_POST['mobile_gst'] : NULL,
									'service_provider_on_gst' => isset($_POST['service_provider_gst']) ? $_POST['service_provider_gst'] : NULL,
									'TAX_number' => isset($_POST['Tax_Classification']) ? $_POST['Tax_Classification'] : NULL,
									// 'vendor_classification' => isset($_POST['vendor_Classification']) ? $_POST['vendor_Classification'] : NULL,
									'nature_of_invoice' => isset($_POST['nature_of_invoice']) ? $_POST['nature_of_invoice'] : NULL,
									'Composition_Scheme_Applicability' => isset($_POST['compo_scheme']) ? $_POST['compo_scheme'] : NULL,
									'gst_vendor' => isset($_POST['gst_vendor']) ? $_POST['gst_vendor'] : NULL,
									'gst_proof' => $gst_name,	
'gst_house_number' => $_POST['gst_house_number'],
'gst_street_2' => $_POST['gst_street_1'],
'gst_street_3' => $_POST['gst_street_2'],
'gst_street_4' => $_POST['gst_street_3'],
'gst_street_5' => $_POST['gst_street_4'],
'gst_street_6' => $_POST['gst_street_5'],
'gst_country_code' => $_POST['gst_country'],
'gst_city' => $_POST['gst_City'],
'gst_district' => $_POST['gst_district'],
'gst_postal' => $_POST['gst_postal_code'],
				 'gst_applicable' => $_POST['gst_applicable'],
'service_provider' => isset($_POST['service_provider']) ? $_POST['service_provider'] : NULL,
									'Vendor_id' => $_POST['vendor_id']				
								);
								//print_r($data['data']);die();
								$field_list = 'GST_number = ?,legal_name_on_gst = ?,State_Code_gst = ?,state_name_on_gst = ?,email_on_gst = ?,mobile_num_on_gst = ?,service_provider_on_gst = ?,TAX_number = ?,nature_of_invoice = ?,Composition_Scheme_Applicability = ?,gst_vendor = ?,gst_proof = ?,gst_house_number = ?,gst_street_2 = ?,gst_street_3 = ?,gst_street_4 = ?,gst_street_5 = ?,gst_street_6 = ?,gst_country_code = ?,gst_city = ?,gst_district = ?,gst_postal = ?,gst_applicable = ?,service_provider = ?';
								$where = 'where Vendor_id = ?';
								$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
				}
							
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
			else
			{
				$data['data'] = array(
					'Vendor_id' => $_POST['vendor_id'],
					'GST_number' => isset($_POST['gst_number']) ? $_POST['gst_number'] : NULL,
					'legal_name_on_gst' => isset($_POST['legal_name_gst']) ? $_POST['legal_name_gst'] : NULL,
					'State_Code_gst' => isset($_POST['state_code']) ? $_POST['state_code'] : NULL,
					'state_name_on_gst' => isset($_POST['state_gst']) ? $_POST['state_gst'] : NULL,
					'email_on_gst' => isset($_POST['email_gst']) ? $_POST['email_gst'] : NULL,
					'mobile_num_on_gst' => isset($_POST['mobile_gst']) ? $_POST['mobile_gst'] : NULL,
					'service_provider_on_gst' => isset($_POST['service_provider_gst']) ? $_POST['service_provider_gst'] : NULL,
					'TAX_number' => isset($_POST['Tax_Classification']) ? $_POST['Tax_Classification'] : NULL,
					// 'vendor_classification' => isset($_POST['vendor_Classification']) ? $_POST['vendor_Classification'] : NULL,
					'nature_of_invoice' => isset($_POST['nature_of_invoice']) ? $_POST['nature_of_invoice'] : NULL,
					'Composition_Scheme_Applicability' => isset($_POST['compo_scheme']) ? $_POST['compo_scheme'] : NULL,
					'gst_vendor' => isset($_POST['gst_vendor']) ? $_POST['gst_vendor'] : NULL,
					'gst_proof' => $gst_name,	
'gst_house_number' => $_POST['gst_house_number'],
'gst_street_2' => $_POST['gst_street_1'],
'gst_street_3' => $_POST['gst_street_2'],
'gst_street_4' => $_POST['gst_street_3'],
'gst_street_5' => $_POST['gst_street_4'],
'gst_street_6' => $_POST['gst_street_5'],
'gst_country_code' => $_POST['gst_country'],
'gst_city' => $_POST['gst_City'],
'gst_district' => $_POST['gst_district'],
'gst_postal' => $_POST['gst_postal_code'],
 'gst_applicable' => $_POST['gst_applicable'],		
'service_provider' => $_POST['service_provider'],						
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(Vendor_id,GST_number,legal_name_on_gst,State_Code_gst,state_name_on_gst,email_on_gst,mobile_num_on_gst,service_provider_on_gst,TAX_number,nature_of_invoice,Composition_Scheme_Applicability,gst_vendor,gst_proof,gst_house_number,gst_street_2,gst_street_3,gst_street_4,gst_street_5,gst_street_6,gst_country_code,gst_city,gst_district,gst_postal,gst_applicable,service_provider)';
				$qry = '(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
				
			// print_r($_POST);die();
		}
		else if($_POST['gst_data_save'] == 'gst_data_save')
		{
if(isset($_POST['dec_prf_doc']) && $_POST['dec_prf_doc'] == 0)
{
	//print_r("ghfghf");die();
			$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
			
					if(count($data['user_details'])>0)
					{
						$data['data'] = array(
		                                        'prov_applicable' => $_POST['prov_applicable'],
		                                        'prov_date' => $_POST['prov_date'],
		 'gst_applicable' => $_POST['gst_applicable'],
							'changes_date' => date("Y-m-d h:i:s"),	
							'Vendor_id' => $_POST['vendor_id']				
						);
						//print_r($data['data']);die();
						$field_list = 'prov_applicable = ?,prov_date = ?,gst_applicable = ?,changes_date = ?';
						$where = 'where Vendor_id = ?';
						$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);				
						//print_r($this->db->affected_rows());die();
						if($this->db->affected_rows()>0)
						{
							echo "added";
						}
						else
						{
							echo "error";
						}
					}
					else
					{
						//print_r("ghfghf");die();
								$data = array(				
									'Vendor_id' => $_POST['vendor_id'],
								);
								$table_name = 'vendor_details_update';
								$where = 'where Vendor_id = ?';
								$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
								//print_r($data['user_details']);die();
								if(count($data['user_details'])>0)
								{
										$data['data'] = array(
											'gst_declr' => $gst_declr,
						                                        'prov_applicable' => $_POST['prov_applicable'],
						                                        'prov_date' => $_POST['prov_date'],
						 'gst_applicable' => $_POST['gst_applicable'],
											'changes_date' => date("Y-m-d h:i:s"),	
											'Vendor_id' => $_POST['vendor_id']				
										);
										//print_r($data['data']);die();
										$field_list = 'gst_declr = ?,prov_applicable = ?,prov_date = ?,gst_applicable = ?,changes_date = ?';
										$where = 'where Vendor_id = ?';
										$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);				
										//print_r($this->db->affected_rows());die();
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
			}
			else
			{
$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
if(isset($data['user_details']) && count($data['user_details'])>0)
{
						$data['data'] = array(
		                                        'gst_declr' => $gst_declr,
                                        'prov_applicable' => $_POST['prov_applicable'],
                                        'prov_date' => $_POST['prov_date'],
 'gst_applicable' => $_POST['gst_applicable'],
					'changes_date' => date("Y-m-d h:i:s"),	
							'Vendor_id' => $_POST['vendor_id']				
						);
						//print_r($data['data']);die();
						$field_list = 'gst_declr = ?,prov_applicable = ?,prov_date = ?,gst_applicable = ?,changes_date = ?';
						$where = 'where Vendor_id = ?';
						$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);				

				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
}
else
{
$data['data'] = array(
					'Vendor_id' => $_POST['vendor_id'],
					'gst_declr' => $gst_declr,
                                        'prov_applicable' => $_POST['prov_applicable'],
                                        'prov_date' => $_POST['prov_date'],
 'gst_applicable' => $_POST['gst_applicable'],
					'changes_date' => date("Y-m-d h:i:s"),					
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(Vendor_id,gst_declr,prov_applicable,prov_date,gst_applicable,changes_date)';
				$qry = '(?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
}
			print_r($data['user_details']);die();
				
			}
				
			// print_r($_POST);die();
		}
		else if($_POST['gst_data_save'] == 'personal_data')
		{
//print_r($_POST['gst_data_save']);die();
			$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
			//print_r($data['user_details']);die();
			if (count($data['user_details'])>0) {
if(isset($_POST['pan_gst_prf']) && $_POST['pan_gst_prf'] == 0)
{
$data['data'] = array(
					'Title' => isset($_POST['title_value']) ? $_POST['title_value'] : $data['user_details']['0']['Title'], 
					'Name' => isset($_POST['name']) ? $_POST['name'] : $data['user_details']['0']['Name'],
'Name2' => isset($_POST['name2_edit']) ? $_POST['name2_edit'] : $data['user_details']['0']['name2_edit'],
					'vendor_type' => isset($_POST['vendor_type']) ? $_POST['vendor_type'] : $data['user_details']['0']['vendor_type'],
					'vendor_desc' => isset($_POST['vendor_desc']) ? $_POST['vendor_desc'] : $data['user_details']['0']['vendor_desc'],
					'changes_date' => date("Y-m-d h:i:s"),	
					'pan' => isset($_POST['pannumber']) ? $_POST['pannumber'] : $data['user_details']['0']['pannumber'],	
					'Vendor_id' => $_POST['vendor_id'],		
				);
				//print_r("ttt");die();
				$field_list = 'Title = ?,Name = ?,Name2 = ?,vendor_type = ?,vendor_desc = ?,changes_date = ?,pan = ?';
				$where = 'where Vendor_id = ?';
				$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);				
				//print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
}
else
{
	$data['data'] = array(
					'Title' => isset($_POST['title_value']) ? $_POST['title_value'] : $data['user_details']['0']['Title'], 
					'Name' => isset($_POST['name']) ? $_POST['name'] : $data['user_details']['0']['Name'],
'Name2' => isset($_POST['name2_edit']) ? $_POST['name2_edit'] : $data['user_details']['0']['name2_edit'],
					'vendor_type' => isset($_POST['vendor_type']) ? $_POST['vendor_type'] : $data['user_details']['0']['vendor_type'],
					'vendor_desc' => isset($_POST['vendor_desc']) ? $_POST['vendor_desc'] : $data['user_details']['0']['vendor_desc'],
					'changes_date' => date("Y-m-d h:i:s"),	
					'pan' => isset($_POST['pannumber']) ? $_POST['pannumber'] :  $data['user_details']['0']['pan'],	
					'pan_proof' => $pan_name,	
					'Vendor_id' => $_POST['vendor_id'],		
				);
				//print_r($data['data']);die();
				$field_list = 'Title = ?,Name = ?,Name2 = ?,vendor_type = ?,vendor_desc = ?,changes_date = ?,pan = ?,pan_proof = ?';
				$where = 'where Vendor_id = ?';
				$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);				
				//print_r($data['data']);die();
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
			else
			{
				$data['data'] = array(		
					'Vendor_id' => $_POST['vendor_id'],	
					'Title' => isset($_POST['title_value']) ? $_POST['title_value'] : NULL, 
					'Name' => isset($_POST['name']) ? $_POST['name'] : NULL,
'Name2' => isset($_POST['name2_edit']) ? $_POST['name2_edit'] : NULL,
					'vendor_type' => isset($_POST['vendor_type']) ? $_POST['vendor_type'] : NULL,
					'vendor_desc' => isset($_POST['vendor_desc']) ? $_POST['vendor_desc'] : NULL,						
					'changes_date' => date("Y-m-d h:i:s"),	
					'pan' => isset($_POST['pannumber']) ? $_POST['pannumber'] : NULL,	
					'pan_proof' => $pan_name,			
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(Vendor_id,Title,Name,Name2,vendor_type,vendor_desc,changes_date,pan,pan_proof)';
				$qry = '(?,?,?,?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
				
			//print_r($_POST);die();
		}
		else if($_POST['gst_data_save'] == 'other_data')
		{
			$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
			// print_r($data['user_details']);die();
			if (count($data['user_details'])>0) {
				$data['data'] = array(	
					'House_Number' => isset($_POST['house_number']) ? $_POST['house_number'] : $data['user_details']['0']['House_Number'],
					'Street' => isset($_POST['street1']) ? $_POST['street1'] : $data['user_details']['0']['Street'],							
					'State_Code' => isset($_POST['state_code_edit_chk']) ? $_POST['state_code_edit_chk'] : $data['user_details']['0']['State_Code'],	
					'State_Name' => isset($_POST['state_name_edit_chk']) ? $_POST['state_name_edit_chk'] : $data['user_details']['0']['State_Name'],							
					'Street2' => isset($_POST['street2']) ? $_POST['street2'] : $data['user_details']['0']['Street2'],
					'Street3' => isset($_POST['street3']) ? $_POST['street3'] : $data['user_details']['0']['Street3'],		
					'Street4' => isset($_POST['street4']) ? $_POST['street4'] : $data['user_details']['0']['Street4'],		
					'Street5' => isset($_POST['street5']) ? $_POST['street5'] : $data['user_details']['0']['Street5'],					
					'Country_Key' => isset($_POST['Country_Key']) ? $_POST['Country_Key'] : $data['user_details']['0']['Country_Key'],
					'City' => isset($_POST['City']) ? $_POST['City'] : $data['user_details']['0']['City'],
					'District' => isset($_POST['district']) ? $_POST['district'] : $data['user_details']['0']['District'],
					'Postal_Code' => isset($_POST['postalcode']) ? $_POST['postalcode'] : $data['user_details']['0']['Postal_Code'],
					'Telephone1' => isset($_POST['telephone1']) ? $_POST['telephone1'] : $data['user_details']['0']['Telephone1'],
					'Fax_Number' => isset($_POST['fax_num']) ? $_POST['fax_num'] : $data['user_details']['0']['Fax_Number'],
					'Telephone2' => isset($_POST['telephone2']) ? $_POST['telephone2'] : $data['user_details']['0']['Telephone2'],	
'EMail_id' => isset($_POST['emailid']) ? $_POST['emailid'] : $data['user_details']['0']['EMail_id'],								
					'changes_date' => date("Y-m-d h:i:s"),
					'Vendor_id' => $_POST['vendor_id'],				
				);
				//print_r($data['user_details']);die();
				$table_name = 'vendor_details_update';
				$field_list = 'House_Number = ?,Street = ?,State_Code = ?,State_Name = ?,Street2 = ?,Street3 = ?,Street4 = ?,Street5 = ?,Country_Key = ?,City = ?,District = ?,Postal_Code = ?,Telephone1 = ?,Fax_Number = ?,Telephone2 = ?,EMail_id = ?,changes_date = ?';
				$where = 'where Vendor_id = ?';
				$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
			else
			{
				$data['data'] = array(	
					'Vendor_id' => $_POST['vendor_id'],	
					'House_Number' => isset($_POST['house_number']) ? $_POST['house_number'] : $data['user_details']['0']['House_Number'],
					'Street' => isset($_POST['street1']) ? $_POST['street1'] : $data['user_details']['0']['Street'],							
					'State_Code' => isset($_POST['state_code_edit_chk']) ? $_POST['state_code_edit_chk'] : $data['user_details']['0']['State_Code'],	
					'State_Name' => isset($_POST['state_name_edit_chk']) ? $_POST['state_name_edit_chk'] : $data['user_details']['0']['State_Name'],		
					'Street2' => isset($_POST['street2']) ? $_POST['street2'] : $data['user_details']['0']['Street2'],
					'Street3' => isset($_POST['street3']) ? $_POST['street3'] : $data['user_details']['0']['Street3'],		
					'Street4' => isset($_POST['street4']) ? $_POST['street4'] : $data['user_details']['0']['Street4'],		
					'Street5' => isset($_POST['street5']) ? $_POST['street5'] : $data['user_details']['0']['Street5'],					
					'Country_Key' => isset($_POST['Country_Key']) ? $_POST['Country_Key'] : $data['user_details']['0']['Country_Key'],
					'City' => isset($_POST['City']) ? $_POST['City'] : $data['user_details']['0']['City'],
					'District' => isset($_POST['district']) ? $_POST['district'] : $data['user_details']['0']['District'],
					'Postal_Code' => isset($_POST['postalcode']) ? $_POST['postalcode'] : $data['user_details']['0']['Postal_Code'],
					'Telephone1' => isset($_POST['telephone1']) ? $_POST['telephone1'] : $data['user_details']['0']['Telephone1'],
					'Fax_Number' => isset($_POST['fax_num']) ? $_POST['fax_num'] : $data['user_details']['0']['Fax_Number'],
					'Telephone2' => isset($_POST['telephone2']) ? $_POST['telephone2'] : $data['user_details']['0']['Telephone2'],	
'EMail_id' => isset($_POST['emailid']) ? $_POST['emailid'] : $data['user_details']['0']['EMail_id'],												
					'changes_date' => date("Y-m-d h:i:s"),			
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(Vendor_id,House_Number,Street,State_Code,State_Name,Street2,Street3,Street4,Street5,Country_Key,City,District,Postal_Code,Telephone1,Fax_Number,Telephone2,EMail_id = ?,changes_date)';
				$qry = '(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
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
		else if($_POST['gst_data_save'] == 'VAT_details')
		{
			$data = array(				
				'Vendor_id' => $_POST['vendor_id'],
			);
			$table_name = 'vendor_details_update';
			$where = 'where Vendor_id = ?';
			$data['user_details'] = $this->common_model->fetch_data($table_name,$where,$data);
			//print_r($data['user_details']);die();
			if (count($data['user_details'])>0) {
				$data['data'] = array(			
					'Excise_Registration' => isset($_POST['excise_reg_no']) ? $_POST['excise_reg_no'] : $data['user_details']['0']['Excise_Registration'],
					'Excise_Range' => isset($_POST['excise_range']) ? $_POST['excise_range'] : $data['user_details']['0']['Excise_Range'],
					'Excise_Division' => isset($_POST['excise_div']) ? $_POST['excise_div'] : $data['user_details']['0']['Excise_Division'],
					'Excise_Commissionerate' => isset($_POST['excise_commisionarate']) ? $_POST['excise_commisionarate'] : $data['user_details']['0']['Excise_Commissionerate'],
					'cst' => isset($_POST['cst_number']) ? $_POST['cst_number'] : $data['user_details']['0']['cst'],
					'lst' => isset($_POST['lst_number']) ? $_POST['lst_number'] : $data['user_details']['0']['lst'],
					'Service_Tax_Reg_No' => isset($_POST['servtax_edit']) ? $_POST['servtax_edit'] : $data['user_details']['0']['Service_Tax_Reg_No'],
					'CENVAT' => isset($_POST['CENVAT_scheme']) ? $_POST['CENVAT_scheme'] : $data['user_details']['0']['CENVAT'],
					'changes_date' => date("Y-m-d h:i:s"),
					'Vendor_id' => $_POST['vendor_id'],				
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = 'Excise_Registration = ?,Excise_Range = ?,Excise_Division = ?,Excise_Commissionerate = ?,cst = ?,lst = ?,Service_Tax_Reg_No = ?,CENVAT = ?,changes_date = ?';
				$where = 'where Vendor_id = ?';
				$data['user_details'] = $this->common_model->edit_data_record($table_name,$field_list,$where,$data['data']);	
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
			else
			{
				$data['data'] = array(	
				    'Vendor_id' => $_POST['vendor_id'],				
					'Excise_Registration' => isset($_POST['excise_reg_no']) ? $_POST['excise_reg_no'] : $data['user_details']['0']['Excise_Registration'],
					'Excise_Range' => isset($_POST['excise_range']) ? $_POST['excise_range'] : $data['user_details']['0']['Excise_Range'],
					'Excise_Division' => isset($_POST['excise_div']) ? $_POST['excise_div'] : $data['user_details']['0']['Excise_Division'],
					'Excise_Commissionerate' => isset($_POST['excise_commisionarate']) ? $_POST['excise_commisionarate'] : $data['user_details']['0']['Excise_Commissionerate'],
					'cst' => isset($_POST['cst_number']) ? $_POST['cst_number'] : $data['user_details']['0']['cst'],
					'lst' => isset($_POST['lst_number']) ? $_POST['lst_number'] : $data['user_details']['0']['lst'],
					'Service_Tax_Reg_No' => isset($_POST['servtax_edit']) ? $_POST['servtax_edit'] : $data['user_details']['0']['Service_Tax_Reg_No'],
					'CENVAT' => isset($_POST['CENVAT_scheme']) ? $_POST['CENVAT_scheme'] : $data['user_details']['0']['CENVAT'],
					'changes_date' => date("Y-m-d h:i:s"),			
				);
				//print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(Vendor_id,Excise_Registration,Excise_Range,Excise_Division,Excise_Commissionerate,cst,lst,Service_Tax_Reg_No,CENVAT,changes_date)';
				$qry = '(?,?,?,?,?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			}
				
			//print_r($_POST);die();
		}
		else
		{
			$data['data'] = array(
					'Title' => isset($_POST['title_value']) ? $_POST['title_value'] : NULL, 
					'Name' => isset($_POST['name']) ? $_POST['name'] : NULL,
					'vendor_type' => isset($_POST['vendor_type']) ? $_POST['vendor_type'] : NULL,
					'vendor_desc' => isset($_POST['vendor_desc']) ? $_POST['vendor_desc'] : NULL,			
					'GST_number' => isset($_POST['gst_number']) ? $_POST['gst_number'] : NULL,
					'legal_name_on_gst' => isset($_POST['legal_name_gst']) ? $_POST['legal_name_gst'] : NULL,
					'State_Code_gst' => isset($_POST['state_code']) ? $_POST['state_code'] : NULL,
					'state_name_on_gst' => isset($_POST['state_gst']) ? $_POST['state_gst'] : NULL,
					'email_on_gst' => isset($_POST['email_gst']) ? $_POST['email_gst'] : NULL,
					// 'mobile_num_on_gst' => isset($_POST['mobile_gst']) ? $_POST['mobile_gst'] : NULL,
					'service_provider_on_gst' => isset($_POST['service_provider_gst']) ? $_POST['service_provider_gst'] : NULL,
					'TAX_number' => isset($_POST['Tax_Classification']) ? $_POST['Tax_Classification'] : NULL,
					'vendor_classification' => isset($_POST['vendor_Classification']) ? $_POST['vendor_Classification'] : NULL,
					'nature_of_invoice' => isset($_POST['nature_of_invoice']) ? $_POST['nature_of_invoice'] : NULL,
					// 'Composition_Scheme_Applicability' => isset($_POST['compo_scheme']) ? $_POST['compo_scheme'] : NULL,	
					// 'Revrse_TAX_applicablility' => isset($_POST['rev_tax']) ? $_POST['rev_tax'] : NULL,
					//'House_Number' => isset($_POST['house_number']) ? $_POST['house_number'] : NULL,
					'Street' => isset($_POST['street1']) ? $_POST['street1'] : NULL,		
					'Street2' => isset($_POST['street2']) ? $_POST['street2'] : NULL,
					'Street3' => isset($_POST['street3']) ? $_POST['street3'] : NULL,		
					'Street4' => isset($_POST['street4']) ? $_POST['street4'] : NULL,		
					'Street5' => isset($_POST['street5']) ? $_POST['street5'] : NULL,
					// 'Country_Key' => isset($_POST['countrykey_now']) ? $_POST['countrykey_now'] : NULL,	
					'State_Code' => isset($_POST['state_code_edit_chk']) ? $_POST['state_code_edit_chk'] : NULL,	
					'State_Name' => isset($_POST['state_name_edit_chk']) ? $_POST['state_name_edit_chk'] : NULL,
					'City' => isset($_POST['City']) ? $_POST['City'] : NULL,
					'District' => isset($_POST['district']) ? $_POST['district'] : NULL,
					'Postal_Code' => isset($_POST['postalcode']) ? $_POST['postalcode'] : NULL,
					'Telephone1' => isset($_POST['telephone1']) ? $_POST['telephone1'] : NULL,
					'Fax_Number' => isset($_POST['fax_num']) ? $_POST['fax_num'] : NULL,
					'Telephone2' => isset($_POST['telephone2']) ? $_POST['telephone2'] : NULL,
					//'EMail_id' => isset($_POST['emailid']) ? $_POST['emailid'] : NULL,
					'Excise_Registration' => isset($_POST['excise_reg_no']) ? $_POST['excise_reg_no'] : NULL,
					'Excise_Range' => isset($_POST['excise_range']) ? $_POST['excise_range'] : NULL,
					'Excise_Division' => isset($_POST['excise_div']) ? $_POST['excise_div'] : NULL,
					'Excise_Commissionerate' => isset($_POST['excise_commisionarate']) ? $_POST['excise_commisionarate'] : NULL,
					'cst' => isset($_POST['cst_number']) ? $_POST['cst_number'] : NULL,
					'lst' => isset($_POST['lst_number']) ? $_POST['lst_number'] : NULL,
					'Service_Tax_Reg_No' => isset($_POST['servtax_edit']) ? $_POST['servtax_edit'] : NULL,
					'pan' => isset($_POST['pannumber']) ? $_POST['pannumber'] : NULL,
					'gst_vendor' => isset($_POST['gst_vendor']) ? $_POST['gst_vendor'] : NULL,
					'gst_proof' => $gst_name,
					'pan_proof' => $pan_name,
					'gst_declr' => $gst_declr,
					 'changes_date' => date("Y-m-d h:i:s"),
					// 'Telephone2' => $this->session->userdata['user_data']['user_id'],
					// 'E-Mail_id' => $this->session->userdata['user_data']['user_id'],
					// 'Excise_Registration' => $this->session->userdata['user_data']['user_id'],						
				);
				// /print_r($data['data']);die();
				$table_name = 'vendor_details_update';
				$field_list = '(
				Title,
				Name,
				vendor_type,
				vendor_desc,
				GST_number,
				legal_name_on_gst,
				State_Code_gst,
				state_name_on_gst,
				email_on_gst,
				service_provider_on_gst,
				TAX_number,vendor_classification,nature_of_invoice,Street,Street2,Street3,Street4,Street5,State_Code,State_Name,City,District,Postal_Code,Telephone1,Fax_Number,Telephone2,Excise_Registration,Excise_Range,Excise_Division,Excise_Commissionerate,cst,lst,Service_Tax_Reg_No,pan,gst_vendor,gst_proof,pan_proof,gst_declr,
				changes_date)';
				$qry = '(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
				$data['user_details'] = $this->common_model->save_data_record($table_name,$field_list,$qry,$data['data']);
				print_r($this->db->affected_rows());die();
				if($this->db->affected_rows()>0)
				{
					echo "added";
				}
				else
				{
					echo "error";
				}
			print_r($_POST);die();
		}
		//print_r($_POST['title_value']);die();
		
				
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */