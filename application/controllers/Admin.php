<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function  index()
    {
        

        if($this->session->role_id){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin', $data);
        $this->load->view('templates/admin_footer');
        }else{
            $this->session->set_flashdata('wrong_password','Please Login');
            redirect('Auth');
        }
        
    }
}
