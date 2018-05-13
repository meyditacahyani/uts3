<?php

class user extends CI_Controller {

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
  $this->session->set_flashdata('success_msg', 'Registered successfully. Dont forget to Edit your profile after login.');
  redirect('user/login_view');

}
  else{

    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('user');
  }
}

  //edit view
  public function EditView($id){

    $result = $this->user_model->getprofil($id);

    $data['data'] = $result;
    $data['nama'] = $nama;
    $data['menu'] = $menu;
    $this->load->view('EditBuku',$data);
  }
  

//edit data
public function EditProfil()
{
    $nama = $this->input->post('nama');
    $user_name = $this->input->post('user_name');
    $id_ktp = $this->input->post('id_ktp');
    $alamat = $this->input->post('alamat');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $user_mobile = $this->input->post('user_mobile');
    $age = $this->input->post('age');
    $food = $this->input->post('food');
    $allergy = $this->input->post('allergy');
    $id = $this->session->user_id;
    $user = array(
      'nama' =>$nama,
      'user_name' =>$user_name,
      'id_ktp' =>$id_ktp,
      'alamat' =>$alamat,
      'tgl_lahir' =>$tgl_lahir,
      'user_mobile' =>$user_mobile,
      'age' =>$age,
      'food' =>$food,
      'allergy' =>$allergy,
    );

        
        $result = $this->user_model->edit_profil($user, $id);
        //$this->user_model->edit_profil($user);
        $data=$this->user_model->getprofil($id);
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);
        $this->session->set_flashdata('success_msg', 'Registered successfully. ');
        
        redirect('welcome/tampilprofil');
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

	public function deletestatus($id){
		$result = $this->user_model->deletestatus($id);
		
		if ($result){
			redirect('welcome/after');
		}else{
		}
  }
  
  public function acc($id2){
    $result = $this->user_model->getstatus1($id2);
    $nama = $this->session->user_name;
		$hp = $this->session->user_mobile;
    $id = $this->session->user_id;
		$data['user_name']=$nama;
		$data['user_mobile']=$hp;		
    $data['user_id']=$id;
    $data['tampilstatus'] = $result;
			$this->load->view("Impress.php",$data);
  }

function user_profile(){
$this->load->view('user_profile.php');
}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

public function update_status(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_id' => $this->input->post('user_id'),
      'status'=>$this->input->post('status'),
      'date'=>$this->input->post('date')
      //'user_password'=>md5($this->input->post('user_password')),
      //'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);
		$this->user_model->status($user);
		$this->session->set_flashdata('success_msg','Status has been posted');
		redirect('welcome/after');
}
//save ke db
public function acceptstatus(){
  $user=array(
    'username_kita'=>$this->input->post('username_kita'),
    'username_orang'=> $this->input->post('username_orang'),
    'status_id' => $this->input->post('status_id'),
    'acc'=>$this->input->post('acc'),
    'date'=>$this->input->post('date')
    

  );
  print_r($user);
  $this->user_model->accept($user);
  redirect('welcome/after');
}

}

?>
