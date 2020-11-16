<?php 
 
 
class kelola extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_kelola');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['bangunan'] = $this->m_kelola->tampil_data()->result();
		$this->load->view('v_kelola',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
    }
    
    function tambah_aksi(){
		$bangunan_id = $this->input->post('bangunan_id');
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
			'bangunan_id' => $bangunan_id,
			'bangunan_nama' => $bangunan_nama ,
			'bangunan_lat' => $bangunan_lat ,
        	'bangunan_long' => $bangunan_long , 
			'topografi' => $topografi ,
			'lingkungan' => $lingkungan ,
        	'pendidikan' => $pendidikan , 
        	'kesehatan' => $kesehatan , 
        	'listrik' => $listrik ,
        	'jalan' => $jalan ,
        	'sumberdata' => $sumberdata ,
        	'jenisdata' => $jenisdata , 
        	'tahuntransaksi' => $tahuntransaksi ,
			'sertifikat' => $sertifikat ,
        	'ratarata' => $ratarata ,
        	'foto' => $foto 
			);
		$this->m_kelola->input_data($data,'bangunan');
		redirect('kelola/index');
	}

	function hapus($bangunan_id){
		$where = array('bangunan_id' => $bangunan_id);
		$this->m_kelola->hapus_data($where,'bangunan');
		redirect('kelola/index');
	}	

	function edit($bangunan_id){
		$where = array('bangunan_id' => $bangunan_id);
		$data['bangunan'] = $this->m_kelola->edit_data($where,'bangunan')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$bangunan_id = $this->input->post('bangunan_id');
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
			'bangunan_id' => $bangunan_id,
			'bangunan_nama' => $bangunan_nama ,
			'bangunan_lat' => $bangunan_lat ,
        	'bangunan_long' => $bangunan_long , 
			'topografi' => $topografi ,
			'lingkungan' => $lingkungan ,
        	'pendidikan' => $pendidikan , 
        	'kesehatan' => $kesehatan , 
        	'listrik' => $listrik ,
        	'jalan' => $jalan ,
        	'sumberdata' => $sumberdata ,
        	'jenisdata' => $jenisdata , 
        	'tahuntransaksi' => $tahuntransaksi ,
			'sertifikat' => $sertifikat ,
        	'ratarata' => $ratarata ,
        	'foto' => $foto 
			);

		$where = array(
			'bangunan_id' => $bangunan_id
		);
		$this->m_kelola->update_data($where, $data,'bangunan');
		redirect('kelola/index');
	}
}