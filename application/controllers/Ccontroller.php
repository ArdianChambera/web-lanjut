<?php
/**
 * 
 */
class Ccontroller extends CI_Controller

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cmodel');
	}
	
	public function index()
	{
		$data['data_table'] = $this->Cmodel->getAll();
		$this->load->view('Remed_index', $data);
	}

	public function tambah()
	{
		$this->load->view('Remed_tambah');

	}

	public function simpan_data()
	{
		$data = array(
			'id_12' 		=> $this->input->post('id_12'),
			'jurusan' 		=> $this->input->post('jurusan'),
			'kelas' 		=> $this->input->post('kelas'),
			'isi'			=> $this->input->post('isi'),
		);

		// print_r($data)
		$this->Cmodel->simpan_data($data);
		redirect('Ccontroller/index');
	}
}
