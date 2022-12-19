<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ModelCustamer');
    }

    public function index()
    {
        $data['user'] = $this->ModelCustamer->getUser()->result_array();
        $this->load->view('user/sisi_user/navbar2');
        $this->load->view('user/informasi');
        $this->load->view('user/kamar');
        $this->load->view('user/kontak');
        $this->load->view('user/sisi_user/footer');
    }
}
