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

  public function edit($id)
  {
    $where = array('id_barang' => $id);
    $data['barang'] = $this->model_barang->edit_barang($where, 'barang')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('templates_admin/edit_barang', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update()
  {
    $id = $this->input->post('id_barang');
    $nama = $this->input->post('nama');
    $keterangan = $this->input->post('keterangan');
    $kategori = $this->input->post('kategori');
    $harga = $this->input->post('harga');
    $stok = $this->input->post('stok');

    $data = array(
      'nama' => $nama,
      'keterangan' => $keterangan,
      'kategori' => $kategori,
      'harga' => $harga,
      'stok' => $stok
    );

    $where = array('id_barang' => $id);

    $this->model_barang->update_barang($where, $data, 'barang');
    redirect('data_barang/index');

  }

  public function hapus($id)
  {
    $where = array('id_barang' => $id);
    $this->model_barang->hapus_barang($where, 'barang');
    redirect('data_barang/index');
  }
}
