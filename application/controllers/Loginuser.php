<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginuser extends CI_Controller{

    public function __construct(){parent::__construct();}

    public function index()
    {   
        $this->user_login->cek_sudah_login();
        $this->form_validation->set_rules('username', 'Username', 'required',array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required',array('required' => '%s harus diisi'));

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->user_login->loginuser($username,$password);
        }
        $data = array('title' => 'Login User');
        $this->load->view('user/login/v_login', $data, FALSE);
    }

    public function logout(){$this->user_login->logout();}

}

