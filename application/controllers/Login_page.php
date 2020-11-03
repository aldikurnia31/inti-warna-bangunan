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

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['email' => $email])->row_array();

        //jika user ada
        if($user){
            //Jika usernya aktif
            if($user['is_active'] == 1){
                // cek passwordnya
                if(password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin_panel');
                
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('login_page');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email ini belum diaktivasi!</div>');
                redirect('login_page');
            }

        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar </div>');
            redirect('login_page');
        }
    }

    public function registrasi(){
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[admin.email]', [
            'is_unique' => 'Email ini sudah terdaftar!' 
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if($this->form_validation->run() == false){
            
            $data['title'] = 'Register Page';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/templates_login/register');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('admin', $data); //user itu nama table di databasenya
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akunmu berhasil dibuat silahkan Login </div>');
            redirect('login_page');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kamu Berhasil Logout! </div>');
        redirect('login_page');
    }
}