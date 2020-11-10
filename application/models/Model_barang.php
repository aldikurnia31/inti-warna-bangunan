<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

  public function tampil_data()
  {
    return $this->db->get('barang')->result_array();
  }

  public function tampil_data_id($id)
  {
    return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
  }

  //method untuk pagination//
  public function get_barang($limit, $start)
  {
    return $this->db->get('barang', $limit, $start)->result_array();
  }
  public function hitung_barang()
  {
    return $this->db->get('barang')->num_rows();
  }
  //==========================================================================================//

  public function tambah()
  {
    $nama = $this->input->post('nama', TRUE);
    $keterangan = $this->input->post('keterangan', TRUE);
    $kategori = $this->input->post('kategori', TRUE);
    $harga = $this->input->post('harga', TRUE);
    $stok = $this->input->post('stok', TRUE);

    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'jpeg|jpg|png';
    $config['max_size']             = 2048;
    $config['max_width']            = 10000;
    $config['max_height']           = 10000;

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('userfile'))
    {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File upload bermasalah silahkan coba lagi!</div>');
      redirect('data_barang');
    }
    else
    {
      $upload_data = $this->upload->data();

      $data = [
        'nama' => $nama,
        'keterangan' => $keterangan,
        'kategori' => $kategori,
        'harga' => $harga,
        'stok' => $stok,
        'gambar' => $upload_data['file_name']
      ];
      $this->db->insert('barang', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Berhasil menambahkan data!</div>');
      redirect('data_barang');
    }
  }

  public function tambah_kategori()
  {
    $data['nama'] = $this->input->post('input');
    $this->db->insert('kategori', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Berhasil menambahkan data!</div>');
    redirect('pengaturan');
  }

  // public function upload_iklan()
  // {
  //   $config['upload_path']          = './uploads/iklan/';
  //   $config['allowed_types']        = 'jpeg|jpg|png';
  //   $config['max_size']             = 2048;
  //   $config['max_width']            = 10000;
  //   $config['max_height']           = 10000;
  //
  //   $this->upload->initialize($config);
  //
  //   if ( ! $this->upload->do_upload('userfile'))
  //   {
  //     $this->session->set_flashdata('message', '<div class="alert alert-danger w-100" role="alert">Harap masukkan file dan coba lagi!</div>');
  //     redirect('pengaturan');
  //   }
  //   else
  //   {
  //     $upload_data = $this->upload->data();
  //     $data['gambar'] = $upload_data['file_name'];
  //     $this->db->insert('gambar_iklan', $data);
  //     $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Gambar iklan berhasil disimpan!</div>');
  //     redirect('pengaturan');
  //   }
  // }

  public function edit()
  {
    $data = [
      'nama' => $this->input->post('nama', TRUE),
      'keterangan' => $this->input->post('keterangan', TRUE),
      'kategori' => $this->input->post('kategori', TRUE),
      'harga' => $this->input->post('harga', TRUE),
      'stok' => $this->input->post('stok', TRUE)
    ];

    $this->db->where('id_barang', $this->input->post('id'));
    $this->db->update('barang', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Data berhasil diedit!</div>');
    redirect('data_barang');
  }

  public function hapus($id)
  {
    $file = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    $path = './uploads/'.$file['gambar'];
    if(unlink($path)){
      $this->db->where('id_barang', $id);
      $this->db->delete('barang');
      $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Data berhasil dihapus!</div>');
      redirect('data_barang');
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Data gagal dihapus!</div>');
      redirect('data_barang');
    }
  }

  public function hapus_kat($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('kategori');
    $this->session->set_flashdata('message', '<div class="alert alert-success w-100" role="alert">Data berhasil dihapus!</div>');
    redirect('pengaturan');

  }

  public function get_barang_keyword($keyword)
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->like('nama', $keyword);

    return $this->db->get()->result_array();
  }

  public function rupiah($num)
  {
    $rupiah = 'Rp'.number_format($num,0,',','.');
    return $rupiah;
  }
}
