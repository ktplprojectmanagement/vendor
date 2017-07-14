<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{		
		//$this->load->view('admin_header_view',$data);
		//$this->load->view('Adminlogin_view');
		$this->load->view('login_layout_view');
		//$this->load->view('footer_view');
	}
}