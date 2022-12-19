<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function getAdmin()
    {
        return $this->db->get('admin');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('admin', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('admin', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('admin', $where);
    }

    public function hapus($where = null)
    {
        $this->db->delete('admin', $where);
    }

    public function simpan($where = null, $data = null)
    {
        $this->db->update('admin', $data, $where);
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
        $this->db->from('admin');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
