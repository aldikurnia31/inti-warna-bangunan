<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
  public function index()
  {
    $data['title'] = 'Admin IWB';
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->db->get('kategori')->result_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/pengaturan', $data);
    $this->load->view('templates_admin/footer');
  }

  // public function iklan()
  // {
  //   $this->model_barang->upload_iklan();
  // }
  //
  // public function hapus_iklan($id)
  // {
  //   $this->model_barang->hapus_iklan($id);
  // }

  public function kategori()
  {
    $this->model_barang->tambah_kategori();
  }

  public function hapus_kategori($id)
  {
    $this->model_barang->hapus_kat($id);
  }
}
