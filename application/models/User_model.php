<?php
class User_model extends CI_model{

  public function getprofil($id){
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('user_id',$id);
      $result=$this->db->get();
      return $result->row_array();
  }

  public function login_user($email,$pass){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_email',$email);
    $this->db->where('user_password',$pass);

    if($query=$this->db->get())
    {
        return $query->row_array();
    }
    else{
      return false;
    }
  

  }

  public function email_check($email,$user_name){

    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_email',$email);
    //$this->db->or();
    $this->db->or_where('user_name',$user_name);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }

  }
  public function register_user($user){


    $this->db->insert('user', $user);

    }
	
public function status($user){


$this->db->insert('status', $user);

}

public function deletestatus($id){
		$checkupdate = false;

		try{
			$this->db->where('status_id',$id);
			$this->db->delete('status');
			$checkupdate = true;
		}catch (Exception $ex) {

			$checkupdate = false;
		}

		return $checkupdate;

	}

	public function getstatus(){
	
		$this->db->order_by('status_id','desc');
		$result = $this->db->get('status');
		return $result->result();
	}
	
	}
	
?>
