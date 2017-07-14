<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendordetails extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{
if($this->session->userdata('vendor_id'))
{
$data['state_details'] = $this->common_model->get_all_data('state_code_list');
$data['sap_state'] = $this->common_model->get_all_data('sap_state');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');

		$data['status_flag'] = 1;
		$data['table_name'] = 'vendor_details';
		$query = "where Vendor_id = ?";
		$data['edit_user_details'] = $this->common_model->fetch_data('vendor_details',$query,$this->session->userdata('vendor_id'));

		$data['table_name'] = 'vendor_details_update';
		$query = "where Vendor_id = ?";
		$data['edit_user_details1'] = $this->common_model->fetch_data('vendor_details_update',$query,$this->session->userdata('vendor_id'));

		//print_r($data['sap_state']);die();

		//print_r($this->session->userdata('vendor_id'));die();
		$this->load->view('header_view',$data);
		$this->load->view('form_sample1',$data);
		//$this->load->view('footer_view');
}
else
{
redirect('/Login', 'refresh');
}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */