<?php 
 
 
class kelola extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelola');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_kelola->tampil_data()->result();
		$this->load->view('v_kelola',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
    }
    
    function tambah_aksi(){
		$bangunan_nama = $this->input->post('bangunan_nama');
		$bangunan_lat = $this->input->post('bangunan_lat');
        $bangunan_long = $this->input->post('bangunan_long');
        $topografi = $this->input->post('topografi');
        $lingkungan = $this->input->post('lingkungan');
        $pendidikan = $this->input->post('pendidikan');
        $kesehatan = $this->input->post('kesehatan');
        $listrik = $this->input->post('listrik');
        $jalan = $this->input->post('jalan');
        $sumberdata = $this->input->post('sumberdata');
        $jenisdata = $this->input->post('jenisdata');
        $tahuntransaksi = $this->input->post('tahuntransaksi');
        $sertifikat = $this->input->post('sertifikat');
        $ratarata = $this->input->post('ratarata');
        $foto = $this->input->post('foto');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
 
}