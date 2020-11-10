<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_barang extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    sudah_login();
  }

  public function index()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    $this->form_validation->set_rules('nama', 'Name', 'required');
    $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

    if($this->form_validation->run() == FALSE){
      $data['title'] = 'IWB Admin';
      $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
      $data['kategori'] = $this->db->get('kategori')->result_array();

      $this->load->view('templates_admin/header', $data);
      $this->load->view('templates_admin/sidebar', $data);
      $this->load->view('templates_admin/tambah_barang', $data);
      $this->load->view('templates_admin/footer');
    } else {
      $this->model_barang->tambah();
    }
  }
}
