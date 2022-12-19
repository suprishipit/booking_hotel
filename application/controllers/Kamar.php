<?php

class Kamar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    // manajemen kamar

    public function index()
    {
        $data['judul'] = 'Data kamar';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kamar'] = $this->ModelKamar->getKamar()->result_array();


        $this->form_validation->set_rules('jenis_kamar', 'masukan nama kamar', 'required', [
            'required' => 'Nama kamar harus diisi',
        ]);

        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric', [
            'required' => 'Stok harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'update kamar';
            $this->load->view('user/sisi_user/sidebar', $data);
            $this->load->view('kamar/kamar');
            $this->load->view('dasboard/footer2');
        } else {

            $data = [
                'jenis_kamar' => $this->input->post('jenis_kamar', true),
                'stok' => $this->input->post('stok', true),
                'dibooking' => 0,
                'sisa_kamar' => 0,
                'VIP' => 50,
                'Reguler' => 50,
                'Family' => 50,
            ];

            $this->ModelKamar->simpankamar($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('kamar');
        }
    }
}
