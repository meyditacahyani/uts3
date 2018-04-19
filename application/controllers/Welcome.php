<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('notlogin');
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function editprofil()
	{
		$this->load->view('editprof');
	}
	public function register()
	{
		$this->load->view('regist');
	}
	public function login()
	{
		$this->load->view('Login');
	}
	public function after()
	{
		$this->load->view('afterlogin');
	}
	public function tampilprofil()
	{
		$this->load->view('tampilprofil');
	}
	public function tampilnotif()
	{
		$this->load->view('tampilnotif');
	}
}	