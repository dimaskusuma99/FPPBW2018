<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('tbl_inbox');
 $query = $this->db->get();
 return $query->result();
 }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
