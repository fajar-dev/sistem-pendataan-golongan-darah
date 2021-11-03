<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_home');
	}

	public function index()
	{
		$data['hasil']= $this->Model_home->tampil('tbl_darah')->result();      
		$this->load->view('home',$data);
	}

	public function tambah_data(){
		$tgl = date("Y-m-d H:i:s");
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$hp = $_POST['hp'];
		$goldar = $_POST['goldar'];
		$data = array (
			'tgl_input'=> $tgl,
			'nama'=> $nama,
			'alamat' => $alamat,
			'hp' => $hp,
			'goldar' => $goldar
		);
		$this->Model_home->tambah('tbl_darah',$data);
		echo $this->session->set_flashdata('msg','tambah');
		redirect(base_url());
	}

	public function tampilkan(){
		$goldar = $_POST['goldar'];
		redirect(base_url('home/goldar/'.$goldar));
	}

	public function goldar($id){
    $data['hasil'] = $this->Model_home->goldar($id)->result();
		$this->load->view('home', $data);
	}
}
