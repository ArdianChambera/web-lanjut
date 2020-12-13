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
		$id_12 			= $this->input->post('txtid_12');
		$jurusan 		= $this->input->post('txtjurusan');
		$kelas 			= $this->input->post('txtkelas');
		$isi			= $this->input->post('txtisi');

		$data = [
			'id_12' 		=> $id_12,
			'jurusan' 		=> $jurusan,
			'kelas' 		=> $kelas,
			'isi'			=> $isi
		];

		// print_r($data)
		$simpan = $this->Cmodel->add($data);

		$this->session->set_flashdata('pesan_berhasil', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data Berhasil Di Tambahkan !
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		</div>
		');

		redirect('Ccontroller/index');
	}
}
