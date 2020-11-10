<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    sudah_login();
  }

  public function index()
  {
    $data['title'] = 'Admin IWB';
    $data['barang'] = $this->model_barang->tampil_data();
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/data_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function edit_data($id)
  {
    $data['barang'] = $this->model_barang->tampil_data_id($id);
    $data['title'] = 'IWB Admin';
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    $data['kategori'] = $this->db->get('kategori')->result_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
    $this->form_validation->set_rules('kategori', 'Kategori', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
    $this->form_validation->set_rules('nama', 'Name', 'required');
    $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

    if($this->form_validation->run() == FALSE){
      $this->load->view('templates_admin/header', $data);
      $this->load->view('templates_admin/sidebar', $data);
      $this->load->view('templates_admin/edit_barang', $data);
      $this->load->view('templates_admin/footer');
    } else {
      $this->model_barang->edit();
    }
  }

  public function hapus_data($id)
  {
    $this->model_barang->hapus($id);
  }

  public function detail_data($id)
  {
    $data['barang'] = $this->model_barang->tampil_data_id($id);
    $data['title'] = 'IWB Admin';
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/detail_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function pencarian()
  {
    $keyword = $this->input->post('keyword');

    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'IWB Admin';
    $data['barang'] = $this->model_barang->get_barang_keyword($keyword);
    $data['keyword'] = $this->input->post('keyword');

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/hasil_pencarian', $data);
    $this->load->view('templates_admin/footer');
  }
}
