<?php
class MasterData extends CI_Controller{

  public function __construct() {
    parent::__construct();
    cek_login();
  }
  public function index(){
    $data['title'] = "Dashboard";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('dashboard', $data);
    $this->load->view('footer', $data);
  }
  public function area(){
    $data['title'] = "Area List";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['area'] = $this->db->get('area')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/area', $data);
    $this->load->view('footer', $data);
  }
  public function tambahArea(){
    $data['title'] = "Tambah Area";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/tambahArea', $data);
    $this->load->view('footer', $data);
  }
  public function tambahArea2(){
    $areaCode = $this->input->post('areaCode');
    $namaArea = $this->input->post('namaArea');

    $data = array(
      'areaCode' => $areaCode,
      'namaArea' => $namaArea
    );
    $this->ModelMasterData->inputArea($data);
    redirect('MasterData/area');
  }
  public function section(){
    $data['title'] = "BU List";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['section'] = $this->db->get('bu')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/section', $data);
    $this->load->view('footer', $data);
  }
  public function tambahSection(){
    $data['title'] = "Tambah BU";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/tambahSection', $data);
    $this->load->view('footer', $data);
  }
  public function tambahSection2(){
    $buCode = $this->input->post('buCode');
    $buName = $this->input->post('buName');
    $pabrik = $this->input->post('pabrik');
    $departemen = $this->input->post('departemen');

    $data = array(
      'buCode' => $buCode,
      'buName' => $buName,
      'pabrik' => $pabrik,
      'departemen' => $departemen
    );
    $this->ModelMasterData->inputSection($data);
    redirect('MasterData/section');
  }
  public function PIC(){
    $data['title'] = "PIC List";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['PIC'] = $this->db->get('pic')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/PIC', $data);
    $this->load->view('footer', $data);
  }
  public function tambahPIC(){
    $data['title'] = "Tambah PIC";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/tambahPIC', $data);
    $this->load->view('footer', $data);
  }
  public function tambahPIC2(){
    $npk = $this->input->post('npk');
    $nama = $this->input->post('nama');

    $data = array(
      'npk' => $npk,
      'nama' => $nama
    );
    $this->ModelMasterData->inputPIC($data);
    redirect('MasterData/PIC');
  }
  public function user(){
    $data['title'] = "User List";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['user2'] = $this->db->get('user')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/user', $data);
    $this->load->view('footer', $data);
  }
  public function tambahUser(){
    $data['title'] = "Tambah User";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['bu'] = $this->db->get('bu')->result_array();
    $data['PIC'] = $this->db->get('pic')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/tambahUser', $data);
    $this->load->view('footer', $data);
  }
  public function tambahUser2(){
    $buCode = $this->input->post('buCode');
    $npk = $this->input->post('npk');
    $nama = $this->input->post('nama');
    $userID = $this->input->post('userID');

    $data = array(
      'buCode' => $buCode,
      'npk' => $npk,
      'nama' => $nama,
      'userId' => $userID
    );
    $this->ModelMasterData->inputUser($data);
    redirect('MasterData/user');
  }
  public function dies(){
    $data['title'] = "Dies List";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['dies'] = $this->db->get('dies')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/dies', $data);
    $this->load->view('footer', $data);
  }
  public function tambahDies(){
    $data['title'] = "Tambah Dies";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['bu'] = $this->db->get('bu')->result_array();
    $data['area'] = $this->db->get('area')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('masterdata/tambahDies', $data);
    $this->load->view('footer', $data);
  }
  public function tambahDies2(){
    $diesNo1 = $this->input->post('diesNo1');
    $diesNo2 = $this->input->post('diesNo2');
    $diesNo3 = $this->input->post('diesNo3');
    $diesNo = $diesNo1."-".$diesNo2."-".$diesNo3;
    $diesName = $this->input->post('diesName');
    $buCode = $this->input->post('buCode');
    $areaCode = $this->input->post('areaCode');
    $critical = $this->input->post('critical');

    $data = array(
      'diesNo' => $diesNo,
      'diesName' => $diesName,
      'buCode' => $buCode,
      'areaCode' => $areaCode,
      'critical' => $critical
    );
    $this->ModelMasterData->inputDies($data);
    redirect('MasterData/dies');
  }
  public function editDies(){
    $data['title'] = "Edit Dies";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['dies'] = $this->ModelMasterData->dies(['diesNo' => $this->uri->segment(3)])->result_array();
    $data['bu'] = $this->db->get('bu')->result_array();
    $data['area'] = $this->db->get('area')->result_array();
    $this->form_validation->set_rules('diesNo', 'Dies No', 'required',
    [ 'required' => 'Dies No Tidak Boleh Kosong']);
    if ($this->form_validation->run() == false) {
      $this->load->view('header', $data);
      $this->load->view('sidebar', $data);
      $this->load->view('masterdata/editDies', $data);
      $this->load->view('footer', $data);
    }
    else {
      $diesNo = $this->input->post('diesNo');
      $diesName = $this->input->post('diesName');
      $buCode = $this->input->post('buCode');
      $areaCode = $this->input->post('areaCode');
      $critical = $this->input->post('critical');

      $data = array(
        'diesNo' => $diesNo,
        'diesName' => $diesName,
        'buCode' => $buCode,
        'areaCode' => $areaCode,
        'critical' => $critical
      );
      $this->ModelMasterData->editDies($data, ['diesNo' => $this->input->post('diesNo')]);
      redirect('MasterData/dies');
    }
  }
}

 ?>
