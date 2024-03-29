<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCtrl extends CI_Controller{
	
    function __construct(){
        parent::__construct();
		$this->load->model('CommonModel','cm');
		$this->load->helper('form');
    }

    public function register(){
		$data['role']=$this->cm->common_select('tbl_role');
		$this->load->view('auth/register');
	}

    public function store(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact No', 'required|is_unique[tbl_auth.contact_no]');
		$this->form_validation->set_rules('uname', 'User Name', 'required|is_unique[tbl_auth.username]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[tbl_auth.email_address]');
		$this->form_validation->set_rules('pswd', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[pswd]');

		if ($this->form_validation->run() == FALSE){
            $data['role']=$this->cm->common_select('tbl_role');
			$data['page']="auth/register";
			$this->load->view('app',$data);
        }else{

			$ud['role_id']=$this->input->post('role');
			$ud['name']=$this->input->post('name');
			$ud['username']=$this->input->post('uname');
			$ud['contact_no']=$this->input->post('contact');
			$ud['email_address']=$this->input->post('email');
			$ud['password']=sha1(md5($this->input->post('pswd')));
			$ud['status']=1;
			$ud['created_at']=date('Y-m-d H:i:s');

			if($this->cm->common_insert('tbl_auth',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('login');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('register');
			}
            
        }
	}

	function login(){
		$this->load->view('auth/login');
	}

	function login_check(){
		if($this->input->post('logintype')){
			return $this->login_patient();
		}else{
			return $this->login_admin();
		}
	}

	function login_patient(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('euc', 'Email', 'required');
		$this->form_validation->set_rules('pswd', 'Confirm Password', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->load->view('auth/login');
        }else{
			$euc=$this->input->post('euc');
			$password=sha1(md5($this->input->post('pswd')));

			$this->db->where('password',$password);
			$this->db->where('email',$euc);

			$d=$this->db->get('users')->row();

			if($d){
				$data = $this->db->query("SELECT * from users where users.id={$d->id}")->row();
				$this->session->set_userdata('pt',$data);
				redirect('pdashboard');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">User name or password is not correct</b>');
				redirect('login');
			}
            
        }
	}

	function login_admin(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('euc', 'Email/Username/Contact No', 'required');
		$this->form_validation->set_rules('pswd', 'Confirm Password', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->load->view('auth/login');
        }else{
			$euc=$this->input->post('euc');
			$password=sha1(md5($this->input->post('pswd')));

			$this->db->where('password',$password);
			/* group all where condition */

			$this->db->group_start();
			$this->db->where('username',$euc)
			->or_where('email_address',$euc)
			->or_where('contact_no',$euc);
        	$this->db->group_end();

			
			$d=$this->db->get('tbl_auth')->row();


			if($d){
				$this->session->set_userdata('ud',$d);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">User name or password is not correct</b>');
				redirect('login');
			}
            
        }
	}


	

	public function logout(){
		session_destroy();
		redirect('home');
	}

	public function lock(){
		session_destroy();
		redirect('login');
	}
}