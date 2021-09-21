<?php
class Login extends CI_Controller{

  public function index(){
    if ($this->session->userdata('userId')) {
      redirect('MasterData');
    }
    $this->form_validation->set_rules('userId', 'Username', 'required',
    [ 'required' => 'Username Harus diisi']);
    $this->form_validation->set_rules('npk', 'Password', 'required',
    [ 'required' => 'Password Harus diisi' ]);
    if ($this->form_validation->run() == false){
      $data['title'] = "Login";
      $data['user'] = '';
      $this->load->view('header', $data);
      $this->load->view('login', $data);
      $this->load->view('footer', $data);
    }
    else {
      $this->_login();
    }
  }
  private function _login(){
    $userId = htmlspecialchars($this->input->post('userId', true));
    $npk = $this->input->post('npk', true);
    $user = $this->ModelMasterData->cekData(['userId' => $userId])->row_array();
    $pass = $this->ModelMasterData->cekData(['npk' => $npk])->row_array();
    if ($user) {
      if ($pass) {
        redirect('MasterData');
      }
    }
  }

}
 ?>
