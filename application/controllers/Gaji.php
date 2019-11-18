<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Gaji extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pegawai_model');
    $this->load->model('Gaji_model');
    $this->load->model('Absensi_model');
  }

  public function index()
  {
    $data['data_pegawai'] = $this->Gaji_model->getData();

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $this->load->view('header/header');
    $this->load->view('gaji/index', $data);
    $this->load->view('footer/footer');
  }

  public function tambah()
  {
    $data['data_pegawai'] = $this->Pegawai_model->getData();

    $this->load->view('header/header');
    $this->load->view('gaji/tambah_gaji', $data);
    $this->load->view('footer/footer');
  }

  public function delete()
  {
    $id_gaji  = $this->uri->segment(3);

    $this->Gaji_model->delete_data('gaji_pegawai', $id_gaji);
    $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
					Data Berhasil dihapus
					</div>');

    redirect('gaji');
  }

  public function generate()
  {



    //Konversi tanggal ke format ddmmYYY
    $date     = $_POST['Bulan'];
    $newDate  = date("m-Y", strtotime($date));



    //ambil data dari POST
    $id_pegawai      = $_POST['id_pegawai'];
    $target          = $_POST['capaian_target'];
    $golongan        = $_POST['golongan'];



    //Generate Total Kehadiran
    $tanggal_awal             = '01-' . $newDate;
    $tanggal_akhir            = '30-' . $newDate;
    $data['jumlah_kehadiran'] = $this->Absensi_model->hitung_kehadiran($id_pegawai, $tanggal_awal, $tanggal_akhir);
    $kehadiran                = $data['jumlah_kehadiran'][0]['COUNT(kehadiran)'];




    //Hitung dengan library 'hitung gaji'
    $this->load->library('Hitung_gaji');
    $nominal_gaji = $this->hitung_gaji->hitung($kehadiran, $target, $golongan);


    $data = array(

      'id_pegawai'                => $id_pegawai,
      'golongan'                  => $golongan,
      'gaji_bulan'                => $newDate,
      'nominal'                   => $nominal_gaji,
      'kehadiran'                 => $kehadiran,
      'capaian_target_bulanan'    => $target
    );


    print_r($data);
    echo $nominal_gaji;


    //Cek jika data gaji telah ada
    $query = $this->db->get_where('gaji_pegawai', array('id_pegawai' => $id_pegawai, 'gaji_bulan' => $newDate));
    $count = $query->num_rows();

    if ($count == 0) {
      $this->Gaji_model->register($data);
      $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
					Data Gaji Berhasil ditambahkan
					</div>');
      redirect('gaji');
    } else {
      $this->session->set_flashdata('alert', '<div class="alert alert-danger">
						<strong>Maaf!</strong> Gaji Pegawai ini sudah terdaftar pada bulan ini
					</div>');
      redirect('gaji');
    }
  }

  function detail_page()
  {
    //Get Data
    $data['gaji_pegawai'] = $this->Gaji_model->getData();
    $data['data_pegawai'] = $this->Pegawai_model->getSingleData($data['gaji_pegawai'][0]['id_pegawai']);

    //Get Nama Bulan
    $data['bulan']     = $data['gaji_pegawai'][0]['gaji_bulan'];
    switch ($data['bulan']) {
      case '1':
        $data['bulan'] =   "Januari";
        break;
      case '2':
        $data['bulan'] =   "Februari";
        break;
      case '3':
        $data['bulan'] =   "Maret";
        break;
      case '4':
        $data['bulan'] =   "April";
        break;
      case '5':
        $data['bulan'] =   "Mei";
        break;
      case '6':
        $data['bulan'] =   "Juni";
        break;
      case '7':
        $data['bulan'] =   "Juli";
        break;
      case '8':
        $data['bulan'] =   "Agustus";
        break;
      case '9':
        $data['bulan'] =   "September";
        break;
      case '10':
        $data['bulan'] =  "Oktober";
        break;
      case '11':
        $data['bulan'] =   "November";
        break;
      case '12':
        $data['bulan'] =   "Desember";
        break;
    }
    // echo $data['bulan'] . " " . date("Y");

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    $this->load->view('header/header');
    $this->load->view('gaji/detail_page', $data);
    $this->load->view('footer/footer');
  }

  function coba()
  {
    $this->load->library('Hitung_gaji');
    $data = $this->hitung_gaji->tampilkanData();

    echo "<pre>";
    print_r($data);
    echo "</pre>";


    $API = $this->hitung_gaji->hitung(20, "Tercapai", 1);
    echo json_encode($API);
  }
}


/* End of file Test_controller.php */
/* Location: ./application/controllers/Test_controller.php */
