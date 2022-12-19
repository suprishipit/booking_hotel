<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBooking extends CI_Model
{
    public function getBoking()
    {
        return $this->db->get('boking');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('boking', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('boking', $where);
    }

    public function getbokingWhere($where = null)
    {
        return $this->db->get_where('boking', $where);
    }

    public function hapus($where = null)
    {
        $this->db->delete('boking', $where);
    }

    public function simpan($where = null, $data = null)
    {
        $this->db->update('boking', $data, $where);
    }

    public function cekBokingAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('boking');
        return $this->db->get()->row($field);
    }


    public function getBokingLimit()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->limit(10);
        return $this->db->get();
    }
}
