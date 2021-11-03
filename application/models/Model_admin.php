<?php
class Model_admin extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

  function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}