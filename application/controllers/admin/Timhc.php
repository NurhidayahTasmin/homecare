<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timhc extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->admin_login->cek_login();
	}

	public function index()
	{
        $data = array('title' => 'Timhc');
        $this->load->view('admin/dashboard/v_timhc', $data, FALSE);
	}

}
