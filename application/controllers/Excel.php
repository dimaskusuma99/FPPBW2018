<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('user_model');
 $this->load->model('m_kontak');
 }

public function index() {
 $data = array( 'title' => 'Data user',
 'user' => $this->user_model->listing());

 $this->load->view('admin/v_inbox', $data);
 }

public function export_excel(){
 $data = array( 'title' => 'Laporan Excel',
 'user' => $this->user_model->listing());
 $this->load->view('admin/laporan_excel', $data);
 }
 function hapus_inbox(){
   $kode=$this->input->post('kode');
   $this->m_kontak->hapus_kontak($kode);
   echo $this->session->set_flashdata('msg','success-hapus');
   redirect('excel');
 }
}

/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */
