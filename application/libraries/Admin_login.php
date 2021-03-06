<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login{
    
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('admin_model');
    }

    public function login($username,$password)
    {
        $check = $this->CI->admin_model->login($username,$password);
        if($check){
            $id_admin = $check->id_admin;
            $nama     = $check->nama;
            $email    = $check->email;

            $this->CI->session->set_userdata('id_admin', $id_admin);
            $this->CI->session->set_userdata('nama', $nama);
            $this->CI->session->set_userdata('username', $username); 
            $this->CI->session->set_userdata('email', $email);
            redirect(base_url('admin/dashboard'), 'refresh');
        } else {
            $this->CI->session->set_flashdata('warning', 'Username atau password salah');
            redirect(base_url('login'), 'refresh');   
        }
    }

    public function cek_login()
    {
        if ($this->CI->session->userdata('username') == "") {
            $this->CI->session->set_flashdata('warning', 'Silahkan Login Terlebih Dahulu');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function cek_sudah_login()
    {
        if ($this->CI->session->userdata('username')) {
            redirect(base_url('admin/dashboard'), 'refresh');
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('id_admin');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('email');
        $this->CI->session->set_flashdata('sukses', 'Logout Berhasil');
        redirect(base_url('login'), 'refresh');   
    }
    
}