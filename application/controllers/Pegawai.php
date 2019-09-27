<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Pegawai extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pegawai_model');
  }

  public function index()
  {

    $data['pegawai'] = $this->Pegawai_model->getData();


    $this->load->view('header/header');
    $this->load->view('pegawai/index', $data);
    $this->load->view('footer/footer');
  }

  public function add_record()
  {
    $this->load->view('header/header');
    $this->load->view('pegawai/add_view');
    $this->load->view('footer/footer');
  }

  public function register()
  {

    $data_form = $this->input->POST(NULL, TRUE);
    if ($data_form) {

      $nama_pegawai  = $data_form['nama_pegawai'];
      $email         = $data_form['email'];
      $jabatan       = $data_form['jabatan'];

      $data = array(
        'nama_pegawai' => $nama_pegawai,
        'email'        => $email,
        'jabatan'      => $jabatan
      );
      $this->Pegawai_model->register($data);
      $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
					Data Berhasil ditambahkan
					</div>');
    }
    redirect('pegawai');
  }

  public function delete()
  {
    $id_pegawai = $this->uri->segment(3);

    $this->Pegawai_model->delete_data('pegawai', $id_pegawai);
    $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
					Data Berhasil dihapus
					</div>');

    redirect('pegawai');
  }

  public function update_record($id_pegawai)
  {

    $pegawai = $this->Pegawai_model->getSingleData($id_pegawai);

    $data_pegawai = array(
      'id_pegawai' => $pegawai[0]['id_pegawai'],
      'nama_pegawai' => $pegawai[0]['nama_pegawai'],
      'email' => $pegawai[0]['email'],
      'jabatan' => $pegawai[0]['jabatan']
    );

    $update_pegawai['pegawai'] = $data_pegawai;

    $this->load->view('header/header');
    $this->load->view('pegawai/update_view', $update_pegawai);
    $this->load->view('footer/footer');
  }

  public function update()
  {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $id_pegawai   = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jabatan      = $_POST['jabatan'];
    $email        = $_POST['email'];

    $data = array(
      'nama_pegawai' => $nama_pegawai,
      'jabatan'      => $jabatan,
      'email'        => $email
    );
    $where = array('id_pegawai' => $id_pegawai);

    $update = $this->Pegawai_model->update_data('pegawai', $data, $where);
    if ($update >= 1) {
      $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
					Data Berhasil Diupdate
					</div>');
      redirect('pegawai');
    }
  }
}


/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */
