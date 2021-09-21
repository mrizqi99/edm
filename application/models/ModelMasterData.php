<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMasterData extends CI_Model{

  public function inputArea($data = null){
    $this->db->insert('area', $data);
  }
  public function inputSection($data = null){
    $this->db->insert('bu', $data);
  }
  public function inputPIC($data = null){
    $this->db->insert('pic', $data);
  }
  public function inputUser($data = null){
    $this->db->insert('user', $data);
  }
  public function inputDies($data = null){
    $this->db->insert('dies', $data);
  }
  public function cekData($where = null){
    return $this->db->get_where('user', $where);
  }
}
 ?>
