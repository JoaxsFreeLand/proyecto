<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


  public function lista()
  {
    $query = $this->db->get('producto');
    return $query->result();
  }

  public function home_add()
  {
    $this->db->insert('producto', array(
                      'name'=>$this->input->post('name', TRUE),
                      'descri'=>$this->input->post('descri', TRUE),
                      'precio'=>$this->input->post('precio', TRUE),
                      ));
  }
}
