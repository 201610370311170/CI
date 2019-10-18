<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Gaji_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Gaji_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

  function register($data)
  {
    $this->load->database();
    $this->db->insert('gaji_pegawai', $data);
  }
}

/* End of file Gaji_model.php */
/* Location: ./application/models/Gaji_model.php */
