<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataadmin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_updateAdmin($id_admin){
		return $this->db->get_where('tabel_admin',array('id_admin'=>$id_admin))->row_array();
	}

	function uploadAdmin(){
		$cek_user =
            $this->db->select('id_admin')
                ->from('tabel_admin')
                ->order_by('id_admin','DESC')
                ->limit('1')
                ->get();
				
        $data['id_admin']	= $cek_user->row()->id_admin+1;
        $data['username']= $this->input->post('username');
        $data['email']	= $this->input->post('email');
        $data['telpon']= $this->input->post('telpon');
        $data['password']   = $this->input->post('password');


        $this->db->insert('tabel_admin',$data);
        return true;
        
    }

    function admin(){
    	return $this->db->get('tabel_admin')->result_array();
    }

    // function updateuser(){
    // 	$data['id_user']	= $this->input->post('id_user');
    //     $data['username']= $this->input->post('username');
    //     $data['email']  = $this->input->post('email');
    //     $data['nomor_telpon']= $this->input->post('nomor_telpon');
    //     $data['password']   = $this->input->post('password');



    //     $this->db->where('id_user', $data['id_user']);
    //     $this->db->update('tb_user', $data);
    //     return true;
    // }

    // function deleteuser($id_user){
    //     $this->db->where('id_user',$id_user);
    //     $this->db->delete('tb_user');
    // }

}