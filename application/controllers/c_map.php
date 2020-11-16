<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_map extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('v_map');
	}

	public function bangunan_json(){
		$data = $this->db->get('bangunan')->result();
		echo json_encode($data);
	}

}
