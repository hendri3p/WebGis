<?php 
	class Users extends CI_Controller{
		//Log in User
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('users/login', $data);
			}else{
				//Get Username
				$username = $this->input->post('username');

				//Get and encypt password
				$password = md5($this->input->post('password'));

				//Login User
				$id = $this->user_model->login($username, $password);
				$role = $this->user_model->role($username, $password);

				if ($id) {
					//Create Session
					$user_data = array(
						'id' => $id,
						'username' => $username,
						'role' => $role,
						'logged_in' => true
					);
					
					//Set Remember Me Checkbox
					// $checked = (isset($_POST['checkbox']))?true:false;
					// if ($checked) {
					// 	$this->config->load('config');
					// 	$this->config->set_item('sess_expiration', 10);
					// 	$this->session->set_userdata($user_data);
					// }else{
					// 	$this->config->load('config');
					// 	$this->config->set_item('sess_expiration', 10);
					// 	$this->session->set_userdata($user_data);
					// }
					
					//kalo mau make ini comment set remember me
					$this->session->set_userdata($user_data);

					//Set message 
					$this->session->set_flashdata('user_loggedin', 'Anda telah Masuk/Login');

					redirect('home');
				}else{
					//Set message 
					$this->session->set_flashdata('login_failed', 'Masuk/Login Gagal dikarenakan Nama/Password salah');

					redirect('users/login');
				}
			}	
		}

		//User Profile
		public function profile(){
			$data['user'] = $this->db->get_where('pengguna', ['id' => $this->session->userdata('id')])->row_array();

			if (empty($data['user'])) {
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('users/profile', $data);
			$this->load->view('templates/footer');
		}

		//Log User Out
		public function logout(){
			//Unset User Data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('username');

			//Set message 
			$this->session->set_flashdata('user_loggedout', 'Anda telah Keluar/Logout');
			redirect('');
		}

		// Register
		public function register(){
			$data['title'] = 'Input Data Teknisi Elband';

			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('nama', 'Nama Teknisi', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');

			if ($this->form_validation->run() === FALSE) {

				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			}else{
				
				//Encrypt Password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//Set message 
				$this->session->set_flashdata('user_registered', 'Anda sekarang sudah mendaftar dan bisa masuk');

				redirect('home');
			}
		}

		//Check if username exist
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'Username sudah terdaftarkan. Mohon mendaftarkan Username yang berbeda');
			if ($this->user_model->check_username_exists($username)) {
				return true;
			}else{
				return false;
			}
		}
	}
?>