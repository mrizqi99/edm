<?php
function cek_login() {
  $ci = get_instance();
  if (!$ci->session->userdata('userId')) {
    redirect('Login');
  }
  else {
    $userId = $ci->session->userdata('userId');
    $npk = $ci->session->userdata('npk');
  }
}
?>
