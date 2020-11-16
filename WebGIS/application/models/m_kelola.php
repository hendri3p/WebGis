<?php

class m_kelola extends CI_Model{
	function tampil_data(){
		return $this->db->get('bangunan');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}