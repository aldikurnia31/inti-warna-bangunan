<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_barang extends CI_Controller {

  public function index()
  {
    $data['title'] = 'IWB Admin';
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('templates_admin/tambah_barang');
    $this->load->view('templates_admin/footer');
  }

  public function tambah()
  {
    $gambar = $_FILES['userfile']['name'];
    $nama = $this->input->post('nama');
    $keterangan = $this->input->post('keterangan', true);
    $kategori = $this->input->post('kategori', true);
    $harga = $this->input->post('harga', true);
    $stok = $this->input->post('stok', true);

    if($gambar == ''){}else {
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'jpeg|jpg|png';
      $config['max_size']             = 2048;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;

      $this->load->library('upload', $config);
      if(!$this->upload->do_upload('userfile')){
        echo "File gagal di upload!";
      }
      $data = array(
        'nama' => $nama,
        'keterangan' => $keterangan,
        'kategori' => $kategori,
        'harga' => $harga,
        'stok' => $stok,
        'gambar' => $gambar
      );

      $this->model_barang->tambah_barang($data, 'barang');
      redirect('data_barang/index');
    }
  }
}
