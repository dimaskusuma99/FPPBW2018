<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_kontak');
        $this->load->model('user_model');
    }

    function index(){
        $this->m_kontak->update_status_kontak();

                $data = array( 'title' => 'Data user',
              'user' => $this->user_model->listing());

        $data['data']=$this->m_kontak->get_all_inbox();
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

    function hapus_inbox(){
        $kode=$this->input->post('kode');
        $this->m_kontak->hapus_kontak($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/inbox');
    }
    
}
