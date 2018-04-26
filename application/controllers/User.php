<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function login_view(){

$this->load->view("login.php");

}

//Ini buat Login

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
		$allstatus = $this->user_model->getstatus();
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
		$data['tampilstatus'] = $allstatus;
        $this->load->view('afterlogin.php',$data);

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }
}
		public function __construct(){

				parent::__construct();
					$this->load->helper('url');
					$this->load->model('user_model');
				$this->load->library('session');

		}

		public function index()
		{
			  $this->load->view("register.php");
		}

		public function register_user(){

			  $user=array(
			  'user_name'=>$this->input->post('user_name'),
			  'user_email'=>$this->input->post('user_email'),
			  'user_password'=>md5($this->input->post('user_password')),
			  'user_mobile'=>$this->input->post('user_mobile')
				);
				print_r($user);

		$email_check=$this->user_model->email_check($user['user_email'],$user['user_name']);

		if($email_check){
		  $this->user_model->register_user($user);
		  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
		  redirect('user/login_view');

		}
		  else{

			$this->session->set_flashdata('error_msg', 'Error occured,Try again.');
			redirect('user');
		  }
		}
public function update_status(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'status'=>$this->input->post('status'),
      'date'=>$this->input->post('date')
      //'user_password'=>md5($this->input->post('user_password')),
      //'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);
		$this->user_model->status($user);
		$this->session->set_flashdata('success_msg','Status has been posted');
		redirect('Welcome/after');
}

public function deletestatus($id){
		$result = $this->user_model->deletestatus($id);
		
		if ($result){
			redirect('Welcome/after');
		}else{
		}
	}

}
?>