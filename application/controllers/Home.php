<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $data['title'] = 'Toko Online';
    $data1['barang'] = $this->model_barang->tampil_data()->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/homepage', $data1);
    $this->load->view('templates/footer');
  }

}
