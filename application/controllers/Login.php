<?php
class Login extends CI_Controller{

  public function index(){

    $login = $this->session->userdata('userId');
    if($login){
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
    else{
      $userId = $this->input->post('userId');
      $npk = $this->input->post('npk');
      $user = $this->ModelMasterData->cekData(['userId' => $userId])->row_array();
      $npk = $this->ModelMasterData->cekData(['npk' => $npk])->row_array();

      if ($user) {
        if ($npk) {
          $data = [
            'userId' => $user['userId'],
          ];
          $this->session->set_userdata($data);
          redirect('MasterData');
        }
        else {
          redirect('Login');
        }
      }
      else {
        redirect('Login');
      }
    }
  }
  public function logout() {
    $this->session->unset_userdata('userId');
    $this->session->unset_userdata('npk');
    redirect('Login');
  }

}
 ?>
