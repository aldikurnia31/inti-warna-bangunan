<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    sudah_login();
  }

  public function index()
  {
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Admin IWB';

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar', $data);
    $this->load->view('templates_admin/index');
    $this->load->view('templates_admin/footer');
  }
}
