<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {

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
				

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
}