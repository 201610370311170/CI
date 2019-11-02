<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Absensi_model extends CI_Model
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

  public function getData($date)
  {
    $data = $this->db->query("select * from absensi where tanggal = '$date'");
    return $data->result_array();
  }

  public function save_batch($data)
  {
    return $this->db->insert_batch('absensi', $data);
  }


  public function getList($tanggal, $kehadiran)
  {
    $data = $this->db->query("select id_pegawai from absensi where tanggal = '$tanggal' and kehadiran ='$kehadiran'");
    return $data->result_array();
  }


  public function select_data($tanggal, $kehadiran)
  {
    $data =  $this->db->query("SELECT * FROM pegawai
    WHERE id_pegawai NOT IN (SELECT id_pegawai FROM absensi where tanggal = '$tanggal' AND kehadiran = '$kehadiran')");

    return $data->result_array();
  }


  public function hitung_kehadiran($id_pegawai, $tanggal_awal, $tanggal_akhir)
  {
    $data = $this->db->query("SELECT COUNT(kehadiran) from absensi where id_pegawai = '$id_pegawai' and tanggal >= '$tanggal_awal' and  tanggal <= '$tanggal_akhir'");

    return $data->result_array();
  }


  // ------------------------------------------------------------------------

}

/* End of file Absensi_model.php */
/* Location: ./application/models/Absensi_model.php */
