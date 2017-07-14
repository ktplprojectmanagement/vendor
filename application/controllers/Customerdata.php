<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerdata extends CI_Controller {

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
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$data['region_list'] = $this->common_model->get_all_data('region_list');
		$data['Incoterms'] = $this->common_model->get_all_data('Incoterms');
		$data['price_grp'] = $this->common_model->get_all_data('price_grp');
		$data['Sales_Office_Code'] = $this->common_model->get_all_data('Sales_Office_Code');
		$data['Sales_Group'] = $this->common_model->get_all_data('Sales_Group');
		$data['Sales_District'] = $this->common_model->get_all_data('Sales_District');


		//print_r($data['state_details']);die();
		$this->load->view('header_view');
		$this->load->view('customer_details',$data);
		//$this->load->view('footer_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */