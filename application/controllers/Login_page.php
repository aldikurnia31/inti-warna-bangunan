<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_page extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/templates_login/login');
            $this->load->view('templates/footer');

        } else {
            //validasi sukses
            $this->_login();
        }
    }
}