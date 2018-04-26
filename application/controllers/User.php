<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

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