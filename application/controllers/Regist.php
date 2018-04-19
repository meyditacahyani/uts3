<?php 


class Regist extends CI_Controller{

	function __construct(){
		parent::__construct();	
		$this->load->helper('url');	
		$this->load->model('M_data');

	}

	function index(){
	}

	function tambah(){
		$this->load->view('Regist');
	}

	function tambah_aksi(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'email' => $email,
			'phone' => $phone,
			'password' => md5($password)
			);
        
        $hasil = $this->M_data->input_data($data);
        if($hasil == TRUE){
            redirect('Welcome/register');
        }else{
            redirect('Welcome/Login');
        }
	}

}