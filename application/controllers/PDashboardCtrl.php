<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDashboardCtrl extends PatientController {


	public function index()
	{
		$data['paget']="patient_dashboard";
		$this->load->view('app_test',$data);
	}

	
}

