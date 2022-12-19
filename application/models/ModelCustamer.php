<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelCustamer extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function hapus($where = null)
    {
        $this->db->delete('user', $where);
    }

    public function simpan($where = null, $data = null)
    {
        $this->db->update('user', $data, $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
