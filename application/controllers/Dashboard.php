<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');

    }

    public function index()
    {
        if($this->admin->logged_id())
        {

           $user_level = $this->session->userdata('user_level');
            
                if($user_level == 'admin')
                {
                    $this->load->view("admin/dashboard"); 
                }
            
                elseif($user_level == 'marketing')
                {
                    $this->load->view("marketing/dashboard"); 
                }
                else
                {
                    redirect('login');
                }       

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }


}