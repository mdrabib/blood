<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardCtrl extends AdminController {

	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel', 'cm');
	}

	public function index(){
		$data['patient']=$this->cm->common_select('patient');
		$data['page']="dashboard";
		$this->load->view('app',$data);
	}

	public function patient_index(){
		$data['paget']="patient_dashboard";
		$this->load->view('app_test',$data);
	}
}
