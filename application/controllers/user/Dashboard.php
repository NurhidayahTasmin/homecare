<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->user_login->cek_login();
	}

	public function index()
	{
        $data = array('title' => 'Dashboard');
        $this->load->view('user/dashboard/v_dashboard', $data, FALSE);
	}
}
