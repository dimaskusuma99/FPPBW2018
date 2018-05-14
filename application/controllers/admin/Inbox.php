<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('m_kontak');
        $this->load->helper('url');
    }

    public function index(){
        $data['tbl_inbox'] = $this->m_kontak->tampil_data()->result();
        $this->load->view('admin/v_inbox',$data);
    }
    
    public function tambah()
    {
        $this->load->view('contact', $data);
    }

    public function tambah_aksi(){
        $data = array(
            'inbox_nama' => $_POST['inbox_nama'],
            'inbox_email' => $_POST['inbox_email'],
            'inbox_kontak' => $_POST['inbox_kontak'],
            'inbox_pesan' => $_POST['inbox_pesan'],
        );
        $result = $this->m_kontak->input_data('tbl_inbox',$data);
        
        redirect('contact');
    }

    public function hapus($id){
        $where = array('inbox_id' => $id);
        $this->m_kontak->hapus_data($where,'tbl_inbox');
        redirect('admin/inbox');
    }
    
}
