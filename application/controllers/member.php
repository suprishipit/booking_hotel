<?php

class Member extends CI_Controller
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
        $password = $this->input->post('password', true);

        $user = $this->ModelCustamer->cekData(['email' => $email])->row_array();

        //jika ada
        if ($user) {
            //jika aktif
            if ($user['nama_user']) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id_user' => $user['id_user'],
                        'nama_user' => $user['nama_user'],
                    ];

                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-message" role="alert">Password Salah!!</div>'
                    );
                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User Belum Diaktifasi!!</div>');
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
            redirect('home');
        }
    }

    public function daftar_user()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required', ['required' => 'Nama Belum Diisi!!']);

        // $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', ['required' => 'Alamat Belum Diisi!!']);

        $this->form_validation->set_rules('email', 'masukan Email', 'required|trim|valid_email|is_unique[user.email]', [
            'required' => 'Email Belum Diisi!!',
            'valid_email' => 'Email Tidak Benar!!',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        $this->form_validation->set_rules('password', 'Masukan Password', 'required|trim|min_length[3]|matches[sandi1]', [
            'matches' => 'Password Tidak Sama!!',
            'min_length' => 'Password Terlalu Pendek!!',
        ]);
        $this->form_validation->set_rules('sandi1', 'ulangi Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi user';
            $this->load->view('user/sisi_user/sidebar', $data);
            $this->load->view('user/daftar_user');
            $this->load->view('dasboard/footer2');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'email' => htmlspecialchars($email),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => 1,
            ];

            $this->ModelCustamer->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Aktivasi Akun anda</div>');
            redirect('member');
        }
    }

    public function ubahPassword()
    {
        $data['judul'] = 'Ubah Password';
        $data['user'] = $this->ModelCustamer->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('email', 'Nama Lengkap', 'required', ['required' => 'email Belum Diisi!!']);

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
            $data['judul'] = 'ubah password user';
            $this->load->view('user/sisi_user/sidebar', $data);
            $this->load->view('user/ubah_password', $data);
            $this->load->view('dasboard/footer2');
        } else {
            $this->input->post('email', true);
            $pwd_skrg = $this->input->post('password_sekarang', true);
            $pwd_baru = $this->input->post('password_baru1', true);
            if (!password_verify($pwd_skrg, $data['user']['sandi'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Saat ini Salah!!! </div>');
                redirect('member/ubahPassword');
            } else {
                if ($pwd_skrg == $pwd_baru) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password Baru tidak boleh sama dengan password saat ini!!! </div>');
                    redirect('member/ubahPassword');
                } else {
                    //password ok
                    $password_hash = password_hash($pwd_baru, PASSWORD_DEFAULT);

                    $this->db->set('sandi', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('usr');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Password Berhasil diubah</div>');
                    redirect('member/ubahPassword');
                }
            }
        }
    }


    public function hapus()
    {
        $where = ['id_user' => $this->uri->segment(3)];
        $this->ModelCustamer->hapus($where);
        redirect('user');
    }
}
