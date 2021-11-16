<?php
class maintainMenu extends CI_Controller{

  public function __construct() {
    parent::__construct();
    cek_login();
  }
  public function createDaily(){
    $data['title'] = "FORM DAILY ACTIVITY";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['bu'] = $this->db->get('bu')->result_array();
    $data['dies'] = $this->db->get('dies')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('maintain/create_daily', $data);
    $this->load->view('footer', $data);
  }
  public function tambahDaily(){
    // $data['bu'] = $this->ModelMaintainMenu->buCek(['buCode' => $this->uri->segment(3)])->result_array();
    $user = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $koneksi = mysqli_connect("localhost","root","","edm");
    $buName2 = mysqli_query($koneksi, "SELECT * FROM bu WHERE buCode = '$_POST[departement]'");
    $buName3 = mysqli_fetch_array($buName2);


    $requestNo = "";
    $issuerName = $user['nama'];
    $diesNo = $this->input->post('diesNo');
    $diesName = $this->input->post('diesName');
    $buCode = $this->input->post('departement');
    $buName = $buName3['buName'];
    $proDT = $this->input->post('proDT');
    $startDT = "";
    $category = $this->input->post('category');
    $problem = $this->input->post('problem');
    $leader = "";
    $maintener = "";
    $finishDT = "";
    $operationTime = "";
    $detail = "";

    $data = array(
      'requestNo' => $requestNo,
      'issuerName' => $issuerName,
      'diesNo' => $diesNo,
      'diesName' => $diesName,
      'buCode' => $buCode,
      'buName' => $buName,
      'proDT' => $proDT,
      'startDT' => $startDT,
      'category' => $category,
      'problem' => $problem,
      'leader' => $leader,
      'maintener' => $maintener,
      'finishDT' => $finishDT,
      'operationTime' => $operationTime,
      'detail' => $detail
    );
    $this->ModelMaintainMenu->inputDailyActivity($data);
    redirect('maintainMenu/createDaily');
  }
  public function editHistory(){
    $data['title'] = "EDIT HISTORY";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['bu'] = $this->ModelMaintainMenu->cekBu(['buCode' => $this->uri->segment(3)])->result_array();
    $data['dda'] = $this->db->get('dda')->result_array();
    $this->load->view('header', $data);
    $this->load->view('sidebar', $data);
    $this->load->view('maintain/editHistory', $data);
    $this->load->view('footer', $data);
  }
  public function ubahHistory(){
    $data['title'] = "Edit Daily Activity";
    $data['user'] = $this->ModelMasterData->cekData(['userId' => $this->session->userdata('userId')])->row_array();
    $data['dda'] = $this->ModelMaintainMenu->join(['requestNo' => $this->uri->segment(3)])->result_array();
    $data['bu'] = $this->db->get('bu')->result_array();
    $data['dies'] = $this->db->get('dies')->result_array();
    // $data['bu2'] = $this->ModelMaintainMenu->cekBu(['buCode' => $this->uri->segment(3)])->result_array();
    $this->form_validation->set_rules('requestNo', 'Request No', 'required',
    [ 'required' => 'Request No Tidak Boleh Kosong']);
    if ($this->form_validation->run() == false) {
      $this->load->view('header', $data);
      $this->load->view('sidebar', $data);
      $this->load->view('maintain/ubahHistory', $data);
      $this->load->view('footer', $data);
    }
    else {
      $koneksi = mysqli_connect("localhost","root","","edm");
      $buName2 = mysqli_query($koneksi, "SELECT * FROM bu WHERE buCode = '$_POST[departement]'");
      $buName3 = mysqli_fetch_array($buName2);

      $requestNo = $this->input->post('requestNo');
      $issuerName = $this->input->post('issuerName');
      $diesNo = $this->input->post('diesNo');
      $diesName = $this->input->post('diesName');
      $buCode = $this->input->post('departement');
      $buName = $buName3['buName'];
      $proDT = $this->input->post('proDT');
      $startDT = "";
      $category = $this->input->post('category');
      $problem = $this->input->post('problem');
      $leader = "";
      $maintener = "";
      $finishDT = "";
      $operationTime = "";
      $detail = "";

      $data = array(
        'requestNo' => $requestNo,
        'issuerName' => $issuerName,
        'diesNo' => $diesNo,
        'diesName' => $diesName,
        'buCode' => $buCode,
        'buName' => $buName,
        'proDT' => $proDT,
        'startDT' => $startDT,
        'category' => $category,
        'problem' => $problem,
        'leader' => $leader,
        'maintener' => $maintener,
        'finishDT' => $finishDT,
        'operationTime' => $operationTime,
        'detail' => $detail
      );
      $this->ModelMaintainMenu->ubahHistory($data, ['requestNo' => $this->input->post('requestNo')]);
      redirect('maintainMenu/editHistory');
    }
  }
  // function get_autocomplete()
  // {
  //   if (isset($_GET['term'])) {
  //     $result = $this->ModelMaintainMenu->get_prov($_GET['term']);
  //     if (count($result) > 0) {
  //       foreach ($result as $row)
  //       $result_array[] = array(
  //           'diesName'=>strtoupper($row->diesName),
  //           'diesNo'=>strtoupper($row->diesNo),
  //         );
  //       echo json_encode($result_array);
  //     }
  //   }
  // }
  function autofill(){
    $koneksi = mysqli_connect("localhost","root","","edm");
    $diesName = $_GET['diesName'];
    $sql = mysqli_query($koneksi, "SELECT * FROM dies WHERE diesName = '$diesName'");
    $dies = mysqli_fetch_array($sql);

    $data = array(
      'diesNo' => $dies['diesNo'],
    );
    echo json_encode($data);
  }
}

?>
