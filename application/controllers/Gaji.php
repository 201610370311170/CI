<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Gaji extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pegawai_model');
    $this->load->model('Gaji_model');
  }

  public function index()
  {
    $this->load->view('header/header');
    $this->load->view('gaji/index');
    $this->load->view('footer/footer');
  }

  public function tambah()
  {
    $data['data_pegawai'] = $this->Pegawai_model->getData();


    // echo "<pre>";
    // print_r($data['data_pegawai'][0]['nama_pegawai']);
    // echo "</pre>";

    $this->load->view('header/header');
    $this->load->view('gaji/tambah_gaji', $data);
    $this->load->view('footer/footer');
  }

  public function generate()
  {

    $date     = $_POST['Bulan'];
    $newDate  = date("m", strtotime($date));


    $id_pegawai      = $_POST['id_pegawai'];
    $kehadiran       = $_POST['jumlah_kehadiran'];
    $target          = $_POST['capaian_target'];


    //Hitung dengan library 'hitung gaji'
    $this->load->library('Hitung_gaji');
    $nominal_gaji = $this->hitung_gaji->print($kehadiran, $target);


    $data = array(

      'id_pegawai'                => $id_pegawai,
      'gaji_bulan'                => $newDate,
      'nominal'                   => $nominal_gaji,
      'kehadiran'                 => $kehadiran,
      'capaian_target_bulanan'    => $target
    );

    $this->Gaji_model->register($data);
    redirect('gaji');
  }
}


/* End of file Test_controller.php */
/* Location: ./application/controllers/Test_controller.php */
