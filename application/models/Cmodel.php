<?php

class Cmodel extends CI_Model {

	// CRUD
	public function getAll()
	{
		// select+from mahasiswa
		return $this->db->get('c_table')->result();
	}
	public function simpan_data($object)
	{
		 $this->db->insert('c_table',$object);
	}

}
