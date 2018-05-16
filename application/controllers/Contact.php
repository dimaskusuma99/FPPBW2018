
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
			parent::__construct();    
			$this->load->model('m_kontak');
			$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('contact');
	}

	function tambah()
	{
			$this->load->view('contact', $data);
	}

	function tambah_aksi(){
			$data = array(
					'inbox_nama' => $_POST['inbox_nama'],
					'inbox_email' => $_POST['inbox_email'],
					'inbox_kontak' => $_POST['inbox_kontak'],
					'inbox_pesan' => $_POST['inbox_pesan'],
			);
			$result = $this->m_kontak->input_data('tbl_inbox',$data);

			redirect('contact');
	}
}
