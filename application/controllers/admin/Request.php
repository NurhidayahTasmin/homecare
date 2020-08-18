<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->admin_login->cek_login();
	}

	public function index()
	{
        $data = array('title' => 'Request');
        $this->load->view('admin/dashboard/v_request', $data, FALSE);
	}

}
