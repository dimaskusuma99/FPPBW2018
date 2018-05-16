
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Limbah extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('m_data');
			$this->load->helper('url');
	}

	public function index(){
			$data['limbah'] = $this->m_data->tampil_data()->result();
			$this->load->view('limbah',$data);
	}

	public function tambah()
	{
			$this->load->view('limbah', $data);
	}

	public function tambah_aksi(){
			$data = array(
					'nama_perusahaan' => $_POST['nama_perusahaan'],
					'jenis_perusahaan' => $_POST['jenis_perusahaan'],
					'alamat_perusahaan' => $_POST['alamat_perusahaan'],
					'provinsi' => $_POST['provinsi'],
					'kabupaten' => $_POST['kabupaten'],
					'kode_pos' => $_POST['kode_pos'],
					'email' => $_POST['email'],
					'jenis_limbah' => $_POST['jenis_limbah'],
					'no_telp' => $_POST['no_telp'],
					'fax' => $_POST['fax'],
					'keterangan' => $_POST['keterangan'],
			);
			$result = $this->m_data->input_data('limbah',$data);

			redirect('limbah');
	}
}
