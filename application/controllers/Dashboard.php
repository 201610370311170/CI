<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('staff')) // Jika tidak ada
      redirect('landing_page'); // Redirect ke halaman login

  }

  public function index()
  {
    $this->load->view('header/header');
    $this->load->view('dashboard');
    $this->load->view('footer/footer');
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
