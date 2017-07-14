<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admindashboard extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{
//print_r($this->session->userdata('purchaser_detail'));die();
		$data['state_details'] = $this->common_model->get_all_data('state_code_list');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$data['region_list'] = $this->common_model->get_all_data('region_list');
		$data['Incoterms'] = $this->common_model->get_all_data('Incoterms');
		$data['price_grp'] = $this->common_model->get_all_data('price_grp');
		$data['Sales_Office_Code'] = $this->common_model->get_all_data('Sales_Office_Code');
		$data['Sales_Group'] = $this->common_model->get_all_data('Sales_Group');
		$data['Sales_District'] = $this->common_model->get_all_data('Sales_District');

$query = "SELECT vendor_id FROM mail_record where mail_sent = 1 group by vendor_id";
$data['mail_recive4'] = $this->db->query($query)->result_array();

$query = "SELECT vendor_id FROM mail_record where mail_sent = 1 and reminder_date != '' group by vendor_id";
$data['mail_recive41'] = $this->db->query($query)->result_array();

$this->db->select('Vendor_id');
$this->db->from('vendor_details_update');
$this->db->where('updation_state != 1 and updation_state != 2');
$data['vendor_pending_data'] = $this->db->get()->result_array();
//print_r($data['vendor_pending_data']);die();



$this->db->select('Vendor_id');
$this->db->from('vendor_details_update');
$this->db->where('updation_state = 1');
$data['vendor_updated_data_aprv'] = $this->db->get()->result_array();

$this->db->select('Vendor_id');
$this->db->from('vendor_details_update');
$this->db->where('updation_state = 2');
$data['vendor_updated_data_rej'] = $this->db->get()->result_array();

$this->db->select('Vendor_id');
$this->db->from('vendor_details_update');
$data['vendor_updated_data'] = $this->db->get()->result_array();

$this->db->select('Vendor_id');
$this->db->from('customer_details_update');
$data['vendor_updated_data1'] = $this->db->get()->result_array();

$this->db->select('Vendor_id');
$this->db->from('customer_details_update');
$this->db->where('updation_state = 2');
$data['vendor_updated_data_rej1'] = $this->db->get()->result_array();

$this->db->select('Vendor_id');
$this->db->from('customer_details_update');
$this->db->where('updation_state = 1');
$data['vendor_updated_data_aprv1'] = $this->db->get()->result_array();


$this->db->select('DISTINCT(vendor_id)');
$this->db->from('mail_record_customer');
$this->db->group_by('vendor_id');
$this->db->where('mail_sent = 1');
$data['custom_mail_receive'] = $this->db->get()->result_array();

$this->db->select('DISTINCT(vendor_id)');
$this->db->from('mail_record_customer');
$this->db->group_by('vendor_id');
$this->db->where('reminder_date != ""');
$data['custom_mail_receive1'] = $this->db->get()->result_array();


$this->db->select('Vendor_id');
$this->db->from('customer_details_update');
$this->db->where('updation_state != 1 and updation_state != 2');
$data['customer_pending_data'] = $this->db->get()->result_array();


		//print_r($data['custom_mail_receive11']);die();
		$this->load->view('admin_header_view',$data);
		$this->load->view('admin_dashboard',$data);
		$this->load->view('footer_view');
	}

	function logout()
	{
		$this->session->set_userdata('vendor_email','');
	}
}