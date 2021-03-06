<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct(){parent::__construct();}

    public function index()
    {   
        $this->admin_login->cek_sudah_login();
        $this->form_validation->set_rules('username', 'Username', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required',array('required' => '%s harus diisi'));

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->admin_login->login($username,$password);
        }
        $data = array('title' => 'Login Admin');
        $this->load->view('admin/login/v_login', $data, FALSE);
    }

    public function logout(){$this->admin_login->logout();}

}

