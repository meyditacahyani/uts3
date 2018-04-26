<?php
class User_model extends CI_model{

//Edit Profil

public function edit_profil($user, $id){
    $checkupdate = false;

    try{
        $this->db->where('user_id',$id);
        $this->db->update('user',$user);
        $checkupdate = true;
    }catch (Exception $ex){

      $checkupdate = false;

    }

    return $checkupdate;

}

public function getprofil($id){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_id',$id);
    $result=$this->db->get();
    return $result->row_array();
}
}
?>