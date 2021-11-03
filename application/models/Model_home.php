<?php
class Model_Home extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

  function tambah($table,$data){
		$this->db->insert($table,$data);
	}
	
	function goldar($id)
	{
		return $this->db->get_where('tbl_darah',array('goldar'=>$id));
	}

}