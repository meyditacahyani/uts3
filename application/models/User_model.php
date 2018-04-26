<?php
class User_model extends CI_model{
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