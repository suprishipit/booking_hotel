<?php

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->_login();
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('sandi', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika ada
        if ($user) {
            //jika aktif
            if ($user['nama_user']) {
                //cek password
                if (password_verify($password, $user['sandi'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_admin' => $user['id_admin'],
                        'nama_user' => $user['nama_user'],

                    ];

                    $this->session->set_userdata($data);
                    redirect('dasboard');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-message" role="alert">Password Salah!!</div>'
                    );
                    redirect('dasboard');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User Belum Diaktifasi!!</div>');
                redirect('dasboard');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
            redirect('dasboard');
        }
    }

    public function daftar_admin()
    {
        if (!$this->session->userdata('email')) {
            redirect('admin');
        }

        $this->form_validation->set_rules('nama_user', 'Masukan Nama', 'required', ['required' => 'Nama belom diisi!!!']);

        $this->form_validation->set_rules('email', 'Masukan Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email Tidak Benar!!',
            'required' => 'Email Belum diisi!!',
            'is_unique' => 'Email Sudah Terdaftar!'
        ]);

        $this->form_validation->set_rules('sandi', 'masukan Password', 'required|trim|min_length[3]|matches[sandi1]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek'
        ]);
        $this->form_validation->set_rules('sandi1', 'ulangi Password', 'required|trim|matches[sandi]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Admin';
            $this->load->view('dasboard/sidebar', $data);
            $this->load->view('admin/daftar_admin');
            $this->load->view('dasboard/footer2');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'email' => htmlspecialchars($email),
                'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
            ];

            $this->ModelUser->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('admin');
        }
    }

    public function ubahData()
    {
        $data['judul'] = 'Ubah Data';
        $data['admin'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('password_sekarang', 'Password Saat ini', 'required|trim', [
            'required' => 'Password saat ini harus diisi'
        ]);

        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[4]|matches[password_baru2]', [
            'required' => 'Password Baru harus diisi',
            'min_length' => 'Password tidak boleh kurang dari 4 digit',
            'matches' => 'Password Baru tidak sama dengan ulangi password'
        ]);

        $this->form_validation->set_rules('password_baru2', 'Konfirmasi Password Baru', 'required|trim|min_length[4]|matches[password_baru1]', [
            'required' => 'Ulangi Password harus diisi',
            'min_length' => 'Password tidak boleh kurang dari 4 digit',
            'matches' => 'Ulangi Password tidak sama dengan password baru'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('dasboard/sidebar', $data);
            $this->load->view('admin/ubah_dtadm', $data);
            $this->load->view('dasboard/footer2');
        } else {
            $pwd_skrg = $this->input->post('password_sekarang', true);
            $pwd_baru = $this->input->post('password_baru1', true);
            if (!password_verify($pwd_skrg, $data['admin']['sandi'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Saat ini Salah!!! </div>');
                redirect('admin/ubahData');
            } else {
                if ($pwd_skrg == $pwd_baru) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Baru tidak boleh sama dengan password saat ini!!! </div>');
                    redirect('admin/ubahData');
                } else {
                    //password ok
                    $password_hash = password_hash($pwd_baru, PASSWORD_DEFAULT);

                    $this->db->set('sandi', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('admin');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Password Berhasil diubah</div>');
                    redirect('admin/ubahData');
                }
            }
        }
    }

    // public function data_admin()
    // {

    //     $data['admin'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    //     $data['admin'] = $this->ModelUser->getAdmin()->result_array();



    //     if ($this->form_validation->run() == false) {
    //         $data['admin'] = $this->ModelUser->getAdmin()->result_array();
    //         $this->load->view('dasboard/navbar', $data);
    //         $this->load->view('admin/data_kamar', $data);
    //         $this->load->view('admin/data', $data);
    //         $this->load->view('admin/data_admin', $data);
    //         $this->load->view('dasboard/footer');
    //     } else {
    //         $data = [
    //             'admin' => $this->ModelUser->hapus('admin', TRUE)
    //         ];

    //         $this->ModelUser->simpanData($data);
    //         redirect('admin/data_admin');
    //     }
    // }

    public function hapus()
    {
        $where = ['id_admin' => $this->uri->segment(3)];
        $this->ModelUser->hapus($where);
        redirect('dasboard');
    }

    public function blok()
    {
        $this->load->view('admin/adm/blok');
    }

    public function gagal()
    {
        $this->load->view('admin/adm/gagal');
    }
}
