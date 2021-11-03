<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	function index(){
    $data['hasil']= $this->Model_admin->tampil('tbl_darah')->result();      
		$this->load->view('admin/admin',$data);
	}

  function hapus($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_darah',$where);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect(base_url('admin'));
	}

	public function edit()
	{
		$id = $_POST['id'];
		$where = array('id' => $id);
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
							$this->db->update('tbl_darah',$data,$where);
							echo $this->session->set_flashdata('msg','success-edit');
							redirect(base_url('admin'));
	}       
}