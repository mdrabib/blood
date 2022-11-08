<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientCtrl extends AdminController{
	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel','cm');
	}

	public function index(){
		$data['patient']=$this->cm->common_select('patient');
		$data['page']="patient/index";
		$this->load->view('app',$data);
	}

	// create
	public function create(){
		// $this->authorization(3);
		/* load helper and library */
		$this->load->helper('form');
		$data['page']="patient/create";
		$this->load->view('app',$data);
	}

	public function store(){
		/* load helper and library */
		$this->load->helper('form');
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('area', 'Area', 'required');
		$this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
		$this->form_validation->set_rules('collect_date', 'Collect Date');

		if ($this->form_validation->run() == FALSE){
			$data['page']="patient/create";
			$this->load->view('app',$data);
        }else{
			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['address']=$this->input->post('address');
			$ud['area']=$this->input->post('area');
			$ud['blood_group']=$this->input->post('blood_group');
			$ud['collect_date']=date('Y-m-d H:i:s');

			if($this->cm->common_insert('patient',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('patient');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('patient/create');
			}
            
        }
	}


	public function update($id){
			/* load helper and library */
			$this->load->helper('form');
			$this->load->library('form_validation');

			/* set validatin */
			$this->form_validation->set_rules('name', 'Full Name', 'required');
			$this->form_validation->set_rules('contact', 'Contact', 'required');
			$this->form_validation->set_rules('address', 'Address', 'required');
			$this->form_validation->set_rules('area', 'Area', 'required');
			$this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
			$this->form_validation->set_rules('collect_date', 'Collect Date');
			

			if ($this->form_validation->run() == FALSE){
				$data['patient']=$this->cm->single_retrive('patient',$id);
				$data['page']="patient/edit";
				$this->load->view('app',$data);
			}else{
				$ud['name']=$this->input->post('name');
				$ud['contact']=$this->input->post('contact');
				$ud['address']=$this->input->post('address');
				$ud['area']=$this->input->post('area');
				$ud['blood_group']=$this->input->post('blood_group');
				$ud['collect_date']=$this->input->post('collect_date');
				// $ud['next_date']=date($ud['last_date'], strtotime('+ 90 days'));
				$con['id'] = $this->input->post('id');

				if($this->cm->common_update('patient',$con,$ud)){
					$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
				}else{
					$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
					//$this->load->view('users/edit/'.$id);
				}
				redirect('patient');
			}
		}


	
	public function destroy($id){
	$condition['id']=$id;
		if($this->cm->common_delete('patient',$condition)){
			$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
		}else{
			$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
		}
		redirect('patient');
	}

	public function request($id,$status,$blood){
		$condition['id']=$id;
		if($status=="1"){
			$ud['collect_date']=date('Y-m-d');
			$ud['status']=$status;

			if($this->cm->common_update('patient',$condition,$ud)){
				$data=$this->db->query("UPDATE `blood_stock` SET`status`=0 WHERE `id`= (select id from blood_stock where status=1 and `blood_group`='$blood' limit 1); ");
				$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
			}
		}else{
			
			if($this->cm->common_delete('patient',$condition)){
			$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
			}
		}
		
		redirect('dashboard');
	}
}
