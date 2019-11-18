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


    //Library Login
    $page_berhasil  = 'dashboard';
    $page_gagal     = 'landing_page';
    $userdata       = 'staff';

    $this->load->library('Login');
    $this->login->masuk($username, $password, $page_berhasil, $page_gagal, $userdata);
  }

  public function logout()
  {
    //Library Login
    $page_gagal   = 'landing_page';
    $userdata     = 'staff';
    $this->load->library('Login');
    $this->login->keluar($page_gagal, $userdata);
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */
