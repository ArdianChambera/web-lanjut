<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_mahasiswa extends CI_Model {

	// CRUD
	public function getAll()
	{
		// select+from mahasiswa
		return $this->db->get('mahasiswa')->result();
	}
	public function simpan_data($object)
	{
		 $this->db->insert('mahasiswa',$object);
	}

}

