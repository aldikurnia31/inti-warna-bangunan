<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

  public function tampil_data()
  {
    return $this->db->get('barang');
  }

  public function get_mahasiswa_list($limit, $start)
  {
      return $this->db->get('barang', $limit, $start)->result_array();
  }

  public function hitung_data()
  {
    return $this->db->get('barang')->num_rows();
  }

  public function tambah_barang($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit_barang($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update_barang($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_barang($Where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

}
