<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_batako extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();      
        $this->load->model('m_data_batako');
        $this->load->helper('url');
    }

    public function index(){
        $data['batako'] = $this->m_data_batako->tampil_data()->result();
        $this->load->view('marketing/request_batako',$data);
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
        
        redirect('order');
    }

    public function hapus($id){
        $where = array('id_batako' => $id);
        $this->m_data_batako->hapus_data($where,'batako');
        redirect('request_batako');
    }

    public function edit($id){
        $where = array('id_batako' => $id);
        $data['batako'] = $this->m_data_batako->edit_data($where,'batako')->result();
        $this->load->view('marketing/edit_batako',$data);
    }

    public function update(){
        $id_batako = $this->input->post('id_batako');
        $nama_customer = $this->input->post('nama_customer');
        $alamat = $this->input->post('alamat');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kode_pos = $this->input->post('kode_pos');
        $status = $this->input->post('status');
        $nomor_identitas = $this->input->post('nomor_identitas');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $fax = $this->input->post('fax');
        $progres = $this->input->post('progres');
 
        $data = array(
            'nama_customer' => $nama_customer,
            'alamat' => $alamat,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kode_pos' => $kode_pos,
            'status' => $status,
            'nomor_identitas' => $nomor_identitas,
            'email' => $email,
            'no_telp' => $no_telp,
            'fax' => $fax,
            'progres' => $progres
        );
 
    $where = array(
        'id_batako' => $id_batako
    );
 
    $this->m_data_batako->update_data($where,$data,'batako');
    redirect('marketing/request_batako');
    }
    
}
