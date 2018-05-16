
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Batako extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			$this->load->model('m_data_batako');
			$this->load->helper('url');
	}

	public function index(){
			$data['batako'] = $this->m_data_batako->tampil_data()->result();
			$this->load->view('batako',$data);
	}

	public function tambah()
	{
			$this->load->view('batako', $data);
	}

	public function tambah_aksi(){
			$data = array(
					'nama_customer' => $_POST['nama_customer'],
					'alamat' => $_POST['alamat'],
					'provinsi' => $_POST['provinsi'],
					'kabupaten' => $_POST['kabupaten'],
					'kode_pos' => $_POST['kode_pos'],
					'status' => $_POST['status'],
					'nomor_identitas' => $_POST['nomor_identitas'],
					'email' => $_POST['email'],
					'no_telp' => $_POST['no_telp'],
					'fax' => $_POST['fax'],
			);
			$result = $this->m_data_batako->input_data('batako',$data);

			redirect('batako');
	}

}
