<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('ModelUser');
	}

	public function index()
	{
		$data['admin'] = $this->ModelUser->getAdmin()->result_array();
		$data['user'] = $this->ModelCustamer->getUser()->result_array();
		$data['kamar'] = $this->ModelKamar->getKamar()->result_array();
		$data['boking'] = $this->ModelBooking->getBoking()->result_array();
		$this->load->view('dasboard/navbar');
		$this->load->view('admin/data_kamar', $data);
		$this->load->view('admin/data', $data);
		$this->load->view('admin/bookingan', $data);
		$this->load->view('dasboard/footer');
	}
}
