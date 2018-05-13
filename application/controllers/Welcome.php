<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
		parent::__construct();
		$this->load->model('user_model');

	}

	public function index()
	{
		$this->load->view('notlogin');
	}
	
	public function profil()
	{
		$nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
		$id = $this->session->user_id;
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;
		$data['user_id']=$id;
		$this->load->view('profil',$data);
	}

	//edit 
	public function editprofil()
	{
		$nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
		$id = $this->session->user_id;
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;
		$data['user_id']=$id;
		$this->load->view('editprof',$data);
	}

	public function after()
	{
		$allstatus = $this->user_model->getstatus();
		$nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
		$id = $this->session->user_id;
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;		
		$data['user_id']=$id;
		$data['tampilstatus'] = $allstatus;
		$this->load->view('afterlogin',$data);
	}

	public function tampilprofil()
	{
		//$allprofil = $this->User_model->getprofil();
		$nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
		$id = $this->session->user_id;
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;
		$data['user_id']=$id;
		$data=$this->user_model->getprofil($id);
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('tgl_lahir',$data['tgl_lahir']);
        $this->session->set_userdata('nama',$data['nama']);
        $this->session->set_userdata('food',$data['food']);
        $this->session->set_userdata('alamat',$data['alamat']);
        $this->session->set_userdata('age',$data['age']);
        $this->session->set_userdata('allergy',$data['allergy']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->session->set_userdata('id_ktp',$data['id_ktp']);
        
		//$data['tampilstatus'] = $allprofil;
		$this->load->view('tampilprofil',$data);
	}

	public function tampilnotif()
	{
		$nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
		$id = $this->session->user_id;
		$result = $this->user_model->getnotif($nama);
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;
		$data['user_id']=$id;
		$data['tampilnotif']=$result;
		$this->load->view('tampilnotif',$data);
	}
}	