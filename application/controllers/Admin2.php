<?php

class Admin2 extends CI_Controller
{
    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if ($this->session->userdata('email')) {
            redirect('admin2');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('sandi', 'sandi', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('dasboard/sidebar', $data);
            $this->load->view('admin/login');
            $this->load->view('dasboard/footer2');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = htmlspecialchars($this->input->post('email', true));
        $sandi = $this->input->post('sandi', true);

        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['nama_user']) {
                //cek password
                if (password_verify($sandi, $user['sandi'])) {
                    $data = [
                        'email' => $user['email'],
                        'nama_user' => $user['nama_user']
                    ];

                    $this->session->set_userdata($data);
                    redirect('dasboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('admin2');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('admin2');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('admin2');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('admin2');
    }

    public function blok()
    {
        $this->load->view('admin2/blok');
    }

    public function gagal()
    {
        $this->load->view('admin2/gagal');
    }
}
