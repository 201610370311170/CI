<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Absensi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('indonesia_date_format');
    $this->load->model('Pegawai_model');
    $this->load->model('Absensi_model');
  }

  public function index()
  {
    $data['date']             = longdate_indo(date('Y-m-d'));
    $condition1               = date('d-m-20y');
    $condition2               = 'Hadir';
    // $data['pegawai']  = $this->Pegawai_model->getData();


    // -------------------------------------------------------------

    $query = $this->Absensi_model->getData($condition1);
    $index = 0;

    // Cek absensi dengan kondisi tanggal dan kehadiran = 'hadir'
    if (count($query) > 0) {

      $condition1               = date('d-m-20y');
      $condition2               = 'Hadir';
      $data['hadir']            = $this->Absensi_model->getList($condition1, $condition2);



      //Ambil data sesuai dengan id_pegawai yang hadir
      for ($i = 0; $i < count($data['hadir']); $i++) {
        $id_pegawai       = $data['hadir'][$i]['id_pegawai'];
        $query['data']    = $this->Pegawai_model->getSingleData($id_pegawai);


        $data['daftar_hadir']['NIP'][$i]          = $id_pegawai;
        $data['daftar_hadir']['Nama_pegawai'][$i] = $query['data']['0']['nama_pegawai'];
      }
    }

    // -------------------------------------------------------------



    // Menampilkan data pegawai yang belum terabsen
    $data['pegawai']  = $this->Absensi_model->select_data($condition1, $condition2);



    $this->load->view('header/header');
    $this->load->view('absensi/absensi', $data);
    $this->load->view('footer/footer');
  }



  public function submit()
  {

    $id_pegawai   = $_POST['id_pegawai'];
    $kehadiran    = $_POST['kehadiran'];
    $tanggal      = date('d-m-Y');



    $data = array();

    foreach ($id_pegawai as $data_pegawai) {
      array_push($data, array(
        'id_pegawai'    => $data_pegawai,
        'kehadiran'     => $kehadiran[$data_pegawai],
        'tanggal'       => $tanggal
      ));
    }

    $insert = $this->Absensi_model->save_batch($data);

    redirect('absensi');
  }
}
















  // public function daftar_hadir()
  // {
  //   // -------------------------------------------------------------
  //   $query = $this->Absensi_model->getData();
  //   $index = 0;



  //   // Cek absensi dengan kondisi tanggal dan kehadiran = 'hadir'
  //   if (count($query) > 0) {

  //     $condition1               = date('d-m-20y');
  //     $condition2               = 'Hadir';
  //     $data['hadir']            = $this->Absensi_model->getList($condition1, $condition2);

  //     echo "<pre>";
  //     print_r($data);
  //     echo "</pre>";


  //     //Ambil data sesuai dengan id_pegawai yang hadir
  //     for ($i = 0; $i < count($data['hadir']); $i++) {
  //       $id_pegawai       = $data['hadir'][$i]['id_pegawai'];
  //       $query['data']    = $this->Pegawai_model->getSingleData($id_pegawai);

  //       echo "<pre>";
  //       print_r($query['data']);
  //       echo "</pre>";

  //       $data['NIP'][$i]          = $id_pegawai;
  //       $data['Nama_pegawai'][$i] = $query['data']['0']['nama_pegawai'];
  //     }

  //     echo "<pre>";
  //     print_r($data['Nama_pegawai']);
  //     echo "</pre>";

  //     echo "Daftar Hadir";
  //     echo "<br>";
  //     for ($i = 0; $i < count($data['NIP']); $i++) {
  //       echo $data['NIP'][$i] . " " . $data['Nama_pegawai'][$i] . "<br>";
  //     }
  //   } else {
  //     echo "Datanya tidak ada";
  //   }

  //   echo date('d-m-y');
  // }
  // -------------------------------------------------------------
