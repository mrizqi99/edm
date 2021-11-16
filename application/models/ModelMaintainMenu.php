<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMaintainMenu extends CI_Model{

  public function inputDailyActivity($data = null){
    $this->db->insert('dda', $data);
  }
  public function ubahHistory($data = null, $where = null) {
    $this->db->update('dda', $data, $where);
  }
  // public function dda($where = null){
  //   return $this->db->get_where('dda', $where);
  // }
  public function cekBu($where = null){
    $this->db->select('buName');
    $this->db->from('bu');
    $this->db->where($where);

    return $this->db->get();
  }
  public function join($where)
  {
      $this->db->select('*');
      $this->db->from('dda');
      $this->db->join('bu', 'bu.buCode=dda.buCode');
      // $this->db->join('dies', 'dies.diesNo=dda.diesNo');
      $this->db->where($where);

      return $this->db->get();
  }
  public function get_prov($where){
    $this->db->select('diesNo');
    $this->db->from('dies');
    $this->db->where($where);

    return $this->db->get();
  }
  // public function inputSection($data = null){
  //   $this->db->insert('bu', $data);
  // }
  // public function inputPIC($data = null){
  //   $this->db->insert('pic', $data);
  // }
  // public function inputUser($data = null){
  //   $this->db->insert('user', $data);
  // }
  // public function inputDies($data = null){
  //   $this->db->insert('dies', $data);
  // }
  // public function cekData($where = null){
  //   return $this->db->get_where('user', $where);
  // }
  // public function dies($where = null){
  //   return $this->db->get_where('dies', $where);
  // }
  // public function editDies($data = null, $where = null) {
  //   $this->db->update('dies', $data, $where);
  // }
}
 ?>
