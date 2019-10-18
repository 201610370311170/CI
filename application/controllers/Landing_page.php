<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Landing_page extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Users_model');
  }

  public function index()
  {
    if ($this->session->userdata('staff')) // Jika user sudah login (Session user ditemukan)
      redirect('dashboard'); // Redirect ke page dashboard

    $this->load->view('landing_page');
  }

  public function login()
  {
    $this->load->library('session');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $this->Users_model->login($username, $password);

    //Jika username dan password benar
    if ($data) {
      $this->session->set_userdata('staff', $data);
      redirect('dashboard');
    }
    //Jika incorrect
    else {
      $this->session->set_flashdata('danger', '<div class="alert alert-danger" role="alert">
					Username atau Password salah!
					</div>');
      redirect('landing_page');
    }
  }

  public function logout()
  {
    //load session library
    $this->load->library('session');
    $this->session->unset_userdata('staff');
    redirect('/');
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
