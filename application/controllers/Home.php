<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $config['base_url'] = 'http://localhost/inti-warna-bangunan/home/index';
    $config['total_rows'] = $this->model_barang->hitung_barang();
    $config['per_page'] = 3;

    $config['full_tag_open'] = '<nav><ul class="mt-4 mb-5 pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';

    $config['first_link'] = 'First';
    $config['first_tag_open'] = ' <li class="page-item">';
    $config['first_tag_close'] = ' </li>';

    $config['last_link'] = 'Last';
    $config['last_tag_open'] = ' <li class="page-item">';
    $config['last_tag_close'] = ' </li>';

    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = ' <li class="page-item">';
    $config['prev_tag_close'] = ' </li>';

    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = ' <li class="page-item">';
    $config['next_tag_close'] = ' </li>';

    $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = ' <li class="page-item">';
    $config['num_tag_close'] = ' </li>';

    $config['attributes'] = array('class'=>'page-link');

    $this->pagination->initialize($config);

    $data['title'] = 'Inti Warna Bangunan';
    $data['start'] = $this->uri->segment(3);
    $data['barang'] = $this->model_barang->get_barang($config['per_page'], $data['start']);
    $data['kategori'] = $this->db->get('kategori')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/homepage', $data);
    $this->load->view('templates/footer');
  }

  public function produk($id)
  {
    $data['barang'] = $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    $data['title'] = 'Inti Warna Bangunan - Produk';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/detail', $data);
    $this->load->view('templates/footer');
  }

}
