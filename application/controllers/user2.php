<?php

class User2 extends CI_Controller
{
    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses halaman login alias dikembalikan ke tampilan user
        if ($this->session->userdata('email')) {
            redirect('user2');
        }

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', [
            'required' => 'Email Harus diisi!!',
            'valid_email' => 'Email Tidak Benar!!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';
            //kata 'login' merupakan nilai dari variabel judul dalam array $data dikirimkan ke view aute_header
            $this->load->view('user/sisi_user/sidebar', $data);
            $this->load->view('user/login');
            $this->load->view('user/sisi_user/footer2');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);

        $user = $this->ModelCustamer->cekData(['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'password' => $user['password']
                    ];

                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('user2');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('user2');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('user2');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama_user');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }

    public function blok()
    {
        $this->load->view('user2/blok');
    }

    public function gagal()
    {
        $this->load->view('user2/gagal');
    }
}
