<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

  public function index()
  {
    $data['title'] = 'Admin IWB';
    $data['barang'] = $this->model_barang->tampil_data()->result();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('templates_admin/data_barang', $data);
    $this->load->view('templates_admin/footer');
  }
}
