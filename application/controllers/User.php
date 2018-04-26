<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

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
        $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
        
        redirect('Welcome/tampilprofil');
}
function user_profile(){
$this->load->view('user_profile.php');
}
}
?>