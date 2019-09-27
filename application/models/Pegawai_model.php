<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Pegawai_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function getData()
  {
    $data = $this->db->query("select * from pegawai ");
    return $data->result_array();
  }

  function register($data)
  {

    $this->load->database();
    $this->db->insert('pegawai', $data);
  }

  function delete_data($table, $id)
  {
    $this->db->where('id_pegawai', $id);
    $this->db->delete($table);
  }

  public function getSingleData($where)
  {
    $data = $this->db->query("select * from pegawai where id_pegawai = " . $where);
    return $data->result_array();
  }

  function update_data($table, $data, $where)
  {
    $update = $this->db->update($table, $data, $where);
    return $update;
  }


  // ------------------------------------------------------------------------

}

/* End of file Pegawai_model.php */
/* Location: ./application/models/Pegawai_model.php */
