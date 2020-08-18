<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('admin_model');
    }

    public function index()
    {
        $admin = $this->admin_model->listing();
        $data = array('title' => 'Data Admin',
                      'tampil'  => $admin);
        $this->load->view('admin/admin/v_admin', $data, FALSE);
    }

}
