<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockCtrl extends AdminController{
	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel','cm');
	}

	public function index(){
		$data['stock']=$this->cm->common_select('blood_stock');
		$data['page']="stock/index";
		$this->load->view('app',$data);
	}

	// create
	public function create(){
		// $this->authorization(3);
		/* load helper and library */
		$this->load->helper('form');
		$data['page']="stock/create";
		$this->load->view('app',$data);
	}

	public function store(){
		/* load helper and library */
		$this->load->helper('form');
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
		$this->form_validation->set_rules('collect_date', 'Collect Date', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['page']="stock/create";
			$this->load->view('app',$data);
        }else{
			$ud['blood_group']=$this->input->post('blood_group');
			$ud['collect_date']=$this->input->post('collect_date');
			$ud['exp_date']=date('Y-m-d',strtotime("+7 day", strtotime($this->input->post('collect_date'))));
			$ud['status']=1;

			if($this->cm->common_insert('blood_stock',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('stock');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('stock/create');
			}
            
        }
	}


	public function update($id){
		/* load helper and library */
		$this->load->helper('form');
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('blood_group', 'Blood Group', 'required');
		$this->form_validation->set_rules('collect_date', 'Collect Date');
		

		if ($this->form_validation->run() == FALSE){
			$data['stock']=$this->cm->single_retrive('blood_stock',$id);
			$data['page']="stock/edit";
			$this->load->view('app',$data);
		}else{
			$ud['blood_group']=$this->input->post('blood_group');
			$ud['collect_date']=$this->input->post('collect_date');
			// $ud['next_date']=date($ud['last_date'], strtotime('+ 90 days'));
			$con['id'] = $this->input->post('id');

			if($this->cm->common_update('blood_stock',$con,$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				//$this->load->view('users/edit/'.$id);
			}
			redirect('stock');
		}
	}

	
	// public function destroy($id){
		// $condition['id']=$id;
		// 	if($this->cm->common_delete('stock',$condition)){
		// 		$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
		// 	}else{
		// 		$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
		// 	}
		// 	redirect('stock');
		// }
}
