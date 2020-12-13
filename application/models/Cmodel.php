<?php

class Cmodel extends CI_Model {

	// CRUD
	public function getAll()
	{
		// select+from mahasiswa
		return $this->db->get('c_table')->result();
	}

	public function add($data_input)
	{
		$this->db->insert('c_table', $data_input);
	}

}
