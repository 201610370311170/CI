<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
		$this->load->database();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function login($username, $password)
  {
    $query = $this->db->get_where('users', array('username'=>$username,'password'=>md5($password)));
    return $query->row_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Users_model_model.php */
/* Location: ./application/models/Users_model_model.php */