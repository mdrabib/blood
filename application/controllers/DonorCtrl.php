<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DonorCtrl extends AdminController{
	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel','cm');
	}

	public function index(){
		$data['donor']=$this->cm->common_select('donor');
		$data['page']="donor/index";
		$this->load->view('app',$data);
	}

	// create
	public function create(){
		// $this->authorization(3);
		/* load helper and library */
		$this->load->helper('form');
		$data['page']="donor/create";
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
		$this->form_validation->set_rules('last_date', 'Last Date');

		if ($this->form_validation->run() == FALSE){
			$data['page']="donor/create";
			$this->load->view('app',$data);
        }else{
			$ud['name']=$this->input->post('name');
			$ud['contact']=$this->input->post('contact');
			$ud['address']=$this->input->post('address');
			$ud['area']=$this->input->post('area');
			$ud['blood_group']=$this->input->post('blood_group');
			$ud['last_date']=date('Y-m-d H:i:s');
			$ud['next_date']=date('Y-m-d',strtotime("+90 day", strtotime($this->input->post('last_date'))));

			if($this->cm->common_insert('donor',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('donor');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('donor/create');
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
			// $this->form_validation->set_rules('last_date', 'Last Date');
			

			if ($this->form_validation->run() == FALSE){				
				$data['donoru']=$this->cm->single_retrive('donor',$id);
				$data['page']="donor/edit";
				$this->load->view('app',$data);
			}else{
				$ud['name']=$this->input->post('name');
				$ud['contact']=$this->input->post('contact');
				$ud['address']=$this->input->post('address');
				$ud['area']=$this->input->post('area');
				$ud['blood_group']=$this->input->post('blood_group');
				// $ud['last_date']=$this->input->post('last_date');
				// $ud['next_date']=date($ud['last_date'], strtotime('+ 90 days'));
				
				$con['id'] = $this->input->post('id');
				
				if($this->cm->common_update('donor',$con,$ud)){
					$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
				}else{
					$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
					//$this->load->view('users/edit/'.$id);
				}
				redirect('donor');
			}
		}


	
		public function destroy($id){
		$condition['id']=$id;
			if($this->cm->common_delete('donor',$condition)){
				$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
			}

			redirect('donor');
		}
}
