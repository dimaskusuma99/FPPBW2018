<?php

Class Models_select extends CI_Model
{

function __construct(){

parent::__construct();

}


function provinsi(){


$this->db->order_by('name','ASC');
$provinces= $this->db->get('provinces');


return $provinces->result_array();


}

function kabupaten($provId){

$kabupaten="<option value='0'>--pilih--</pilih>";

$this->db->order_by('name','ASC');
$kab= $this->db->get_where('regencies',array('province_id'=>$provId));

foreach ($kab->result_array() as $data ){
$kabupaten.= "<option value='$data[id]'>$data[name]</option>";
}

return $kabupaten;

}

} 