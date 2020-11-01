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
    $nama = $this->input->post('nama');
    $keterangan = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');
    $file = $this->request->getfile('gambar');

    dd($gambar);

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
