<?php
defined('BASEPATH') OR exit('No direct script access alowed');

class Admin_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function listing()
    {
        $this->db->select('*');
        $this->db->from('tabel_admin');
        $this->db->order_by('id_admin', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tabel_admin');
        $this->db->order_by('id_admin', 'asc');
        $query = $this->db->get();
        return $query->result();
    }


    public function getavatar()
    {
        $this->db->from('tabel_admin');
        $this->db->where('gambar', NULL);
        $this->db->order_by('id_admin', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('tabel_admin', $data);
    }

     public function delete($data)
    {
      $this->db->where('id_admin', $data['id_admin']);
      $this->db->delete('tabel_admin', $data);
    }

    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tabel_admin');
        $this->db->where(array('username' => $username,
                               'password' => SHA1($password)
        ));
        $this->db->order_by('id_admin', 'asc');
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($data)
    {
      $this->db->where('id_admin', $data['id_admin']);
      $this->db->update('tabel_admin', $data);
    }

    public function detail($id_admin)
    {
      $this->db->select('*');
      $this->db->from('tabel_admin');
      $this->db->where('id_admin', $id_admin);
      $this->db->order_by('id_admin', 'asc');
      $query = $this->db->get();
      return $query->row();
    }
}