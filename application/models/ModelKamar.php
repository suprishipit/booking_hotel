<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKamar extends CI_Model
{
    //manajemen buku
    public function getKamar()
    {
        return $this->db->get('kamar');
    }

    public function kamarWhere($where)
    {
        return $this->db->get_where('kamar', $where);
    }

    public function simpankamar($data = null)
    {
        $this->db->insert('kamar', $data);
    }

    public function updatekamar($data = null, $where = null)
    {
        $this->db->update('kamar', $data, $where);
    }

    public function data($data = null, $where = null)
    {
        $this->db->select('kamar', $data, $where);
    }

    public function hapusBuku($where = null)
    {
        $this->db->delete('kamar', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('kamar');
        return $this->db->get()->row($field);
    }




    public function getLimitKamar()
    {
        $this->db->limit(50);
        return $this->db->get('kamar');
    }
}
