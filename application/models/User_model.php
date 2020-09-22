<?php 
	class User_model extends CI_Model{
		//Log User In
		public function login($username, $password){
			//validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('akun');

			if ($result->num_rows() == 1) {
				return $result->row(0)->id;
			}else{
				return false;
			}
		}

		// public function security(){
		// 	$this->session->unset_userdata('username');
		// 	$this->session->unset_userdata('password');
		// 	$this->session->set_flashdata('message','You Are Log Out');
		// 	redirect('login');
		// }

		public function role($username, $password){
			//validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);

			$result = $this->db->get('akun');

			if ($result->num_rows() == 1) {
				return $result->row(0)->role;
			}else{
				return false;
			}
		}

		public function register($enc_password){
			//User data array
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $enc_password,
			);

			//Insert User
			return $this->db->insert('akun', $data);
		}

		//Check username
		public function check_username_exists($username){
			$query = $this->db->get_where('akun', array('username' => $username));
			if (empty($query->row_array())) {
				return true;
			}else{
				return false;
			}
		}

	}
 ?>