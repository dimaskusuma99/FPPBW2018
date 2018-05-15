<?php

Class Select extends CI_Controller

{
	public function __construct(){

		parent::__construct();

		$this->load->database();

		$this->load->helper(array('url'));

		$this->load->model('models_select');
}


	public function index()
{

	$data['provinsi']=$this->models_select->provinsi();
	$this->load->view('order',$data);

}

	public function ambil_data()
{	
	$modul=$this->input->post('modul');
	$id=$this->input->post('id');

	if($modul=="kabupaten"){
	echo $this->models_select->kabupaten($id);

	
	}
}

}

 