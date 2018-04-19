<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_data extends CI_Model{

    public function __construct(){
		$this->load->database();
		$this->load->model('M_data');
	}
 
	public function input_data($data){
		$check = false;

		try{
			$this->db->insert('user',$data);
			$check = true;
		}catch(Excception $ex){
			$check = false;
		}

		return $check;
		 
	}
}