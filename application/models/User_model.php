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


 // Listing limbah
  public function limbah() {
  $this->db->select('*');
  $this->db->from('limbah');
  $query = $this->db->get();
  return $query->result();
  }


// Listing limbah
 public function batako() {
 $this->db->select('*');
 $this->db->from('batako');
 $query = $this->db->get();
 return $query->result();
 }
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
