<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request_limbah extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      if(!isset($_SESSION['logged_in'])){
              $url=base_url('administrator');
              redirect($url);
          };
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    public function index(){
        $data['limbah'] = $this->m_data->tampil_data()->result();
        $this->load->view('marketing/request_limbah',$data);
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

    public function hapus($id){
        $where = array('id_order_limbah' => $id);
        $this->m_data->hapus_data($where,'limbah');
        redirect('marketing/request_limbah');
    }

    public function edit($id){
        $where = array('id_order_limbah' => $id);
        $data['limbah'] = $this->m_data->edit_data($where,'limbah')->result();
        $this->load->view('marketing/edit_limbah',$data);
    }

    public function update(){
        $id_order_limbah = $this->input->post('id_order_limbah');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $jenis_perusahaan = $this->input->post('jenis_perusahaan');
        $alamat_perusahaan = $this->input->post('alamat_perusahaan');
        $provinsi = $this->input->post('provinsi');
        $kabupaten = $this->input->post('kabupaten');
        $kode_pos = $this->input->post('kode_pos');
        $email = $this->input->post('email');
        $jenis_limbah = $this->input->post('jenis_limbah');
        $no_telp = $this->input->post('no_telp');
        $fax = $this->input->post('fax');
        $keterangan = $this->input->post('keterangan');
        $status = $this->input->post('status');

        $data = array(
            'nama_perusahaan' => $nama_perusahaan,
            'jenis_perusahaan' => $jenis_perusahaan,
            'alamat_perusahaan' => $alamat_perusahaan,
            'provinsi' => $provinsi,
            'kabupaten' => $kabupaten,
            'kode_pos' => $kode_pos,
            'email' => $email,
            'jenis_limbah' => $jenis_limbah,
            'no_telp' => $no_telp,
            'fax' => $fax,
            'keterangan' => $keterangan,
            'status' => $status,
        );

    $where = array(
        'id_order_limbah' => $id_order_limbah
    );

    $this->m_data->update_data($where,$data,'limbah');
    redirect('marketing/request_limbah');
    }

}
