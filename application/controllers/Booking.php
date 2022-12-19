<?php

class Booking extends CI_Controller
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

        $user = $this->ModelBooking->cekData(['email' => $email])->row_array();

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

    public function ngebooking_vip()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required', ['required' => 'Nama Belum Diisi!!']);
        $this->form_validation->set_rules('email', 'Nama Lengkap', 'required', ['required' => 'email Belum Diisi!!']);
        $this->form_validation->set_rules('no_hp', 'no_hp Lengkap', 'required', ['required' => 'no hp Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required', ['required' => 'tanggal masuk Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_keluar', 'tanggal keluar ', 'required', ['required' => 'tanggal keluar Belum Diisi!!']);
        $this->form_validation->set_rules('jenis_kamar', 'jenis kamar ', 'required', ['required' => 'jenis kamar Belum Diisi!!']);
        $this->form_validation->set_rules('jumlah_vip', 'jumlah kamar ', 'required', ['required' => 'jumlah kamar Belum Diisi!!']);
        $this->form_validation->set_rules('harga', 'harga ', 'required', ['required' => 'harga Belum Diisi!!']);
        $this->form_validation->set_rules('total', 'total ', 'required', ['required' => 'total Belum Diisi!!']);
        $this->form_validation->set_rules('diskon', 'diskon ', 'required', ['required' => 'total Belum Diisi!!']);




        if ($this->form_validation->run() == false) {
            $data['judul'] = 'booking';
            $this->load->view('booking/sidebar', $data);
            $this->load->view('booking/vip');
            $this->load->view('dasboard/footer2');
        } else {
            $email = $this->input->post('email', true);
            $data = [

                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'email' => htmlspecialchars($email),
                'no_hp' => $this->input->post('no_hp', true),
                'tanggal_masuk' => $this->input->post('tanggal_masuk', true),
                'tanggal_keluar' => $this->input->post('tanggal_keluar', true),
                'jenis_kamar' => $this->input->post('jenis_kamar', true),
                'jumlah_vip' => $this->input->post('jumlah_vip', true),
                'harga' => $this->input->post('harga', true),
                'diskon' => $this->input->post('diskon', true),
                'total' => $this->input->post('total', true),
                'image' => 'default.jpg',

            ];

            $this->ModelBooking->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! anda sudah booking lakukan tranfer untuk pembayaran </div>');
            redirect('booking/tranfer2');
        }
    }

    public function ngebooking_reguler()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required', ['required' => 'Nama Belum Diisi!!']);
        $this->form_validation->set_rules('email', 'Nama Lengkap', 'required', ['required' => 'email Belum Diisi!!']);
        $this->form_validation->set_rules('no_hp', 'no_hp Lengkap', 'required', ['required' => 'no hp Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required', ['required' => 'tanggal masuk Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_keluar', 'tanggal keluar ', 'required', ['required' => 'tanggal keluar Belum Diisi!!']);
        $this->form_validation->set_rules('jenis_kamar', 'jenis kamar ', 'required', ['required' => 'jenis kamar Belum Diisi!!']);
        $this->form_validation->set_rules('jumlah_reguler', 'jumlah kamar ', 'required', ['required' => 'jumlah kamar Belum Diisi!!']);
        $this->form_validation->set_rules('harga', 'harga ', 'required', ['required' => 'harga Belum Diisi!!']);
        $this->form_validation->set_rules('total', 'total ', 'required', ['required' => 'total Belum Diisi!!']);
        $this->form_validation->set_rules('diskon', 'diskon ', 'required', ['required' => 'total Belum Diisi!!']);




        if ($this->form_validation->run() == false) {
            $data['judul'] = 'booking';
            $this->load->view('booking/sidebar', $data);
            $this->load->view('booking/reguler');
            $this->load->view('dasboard/footer2');
        } else {
            $email = $this->input->post('email', true);
            $data = [

                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'email' => htmlspecialchars($email),
                'no_hp' => $this->input->post('no_hp', true),
                'tanggal_masuk' => $this->input->post('tanggal_masuk', true),
                'tanggal_keluar' => $this->input->post('tanggal_keluar', true),
                'jenis_kamar' => $this->input->post('jenis_kamar', true),
                'jumlah_reguler' => $this->input->post('jumlah_reguler', true),
                'harga' => $this->input->post('harga', true),
                'diskon' => $this->input->post('diskon', true),
                'total' => $this->input->post('total', true),
                'image' => 'default.jpg',

            ];

            $this->ModelBooking->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! anda sudah booking lakukan tranfer untuk pembayaran </div>');
            redirect('booking/tranfer2');
        }
    }

    public function ngebooking_family()
    {
        $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required', ['required' => 'Nama Belum Diisi!!']);
        $this->form_validation->set_rules('email', 'Nama Lengkap', 'required', ['required' => 'email Belum Diisi!!']);
        $this->form_validation->set_rules('no_hp', 'no_hp Lengkap', 'required', ['required' => 'no hp Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_masuk', 'tanggal masuk', 'required', ['required' => 'tanggal masuk Belum Diisi!!']);
        $this->form_validation->set_rules('tanggal_keluar', 'tanggal keluar ', 'required', ['required' => 'tanggal keluar Belum Diisi!!']);
        $this->form_validation->set_rules('jenis_kamar', 'jenis kamar ', 'required', ['required' => 'jenis kamar Belum Diisi!!']);
        $this->form_validation->set_rules('jumlah_family', 'jumlah kamar ', 'required', ['required' => 'jumlah kamar Belum Diisi!!']);
        $this->form_validation->set_rules('harga', 'harga ', 'required', ['required' => 'harga Belum Diisi!!']);
        $this->form_validation->set_rules('total', 'total ', 'required', ['required' => 'total Belum Diisi!!']);
        $this->form_validation->set_rules('diskon', 'diskon ', 'required', ['required' => 'total Belum Diisi!!']);




        if ($this->form_validation->run() == false) {
            $data['judul'] = 'booking';
            $this->load->view('booking/sidebar', $data);
            $this->load->view('booking/family');
            $this->load->view('dasboard/footer2');
        } else {
            $email = $this->input->post('email', true);
            $data = [

                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'email' => htmlspecialchars($email),
                'no_hp' => $this->input->post('no_hp', true),
                'tanggal_masuk' => $this->input->post('tanggal_masuk', true),
                'tanggal_keluar' => $this->input->post('tanggal_keluar', true),
                'jenis_kamar' => $this->input->post('jenis_kamar', true),
                'jumlah_family' => $this->input->post('jumlah_family', true),
                'harga' => $this->input->post('harga', true),
                'total' => $this->input->post('total', true),
                'diskon' => $this->input->post('diskon', true),
                'image' => 'default.jpg',

            ];

            $this->ModelBooking->simpanData($data); //menggunakan model

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! anda sudah booking lakukan tranfer untuk pembayaran </div>');
            redirect('booking/tranfer2');
        }
    }

    public function tranfer2()
    {
        $data['judul'] = 'transfer';
        $this->load->view('booking/sidebar', $data);
        $this->load->view('booking/image', $data);
        $this->load->view('dasboard/footer2');
    }


    public function tranfer_image()
    {
        $data = $this->ModelBooking->cekData(['email' => $this->session->userdata('email')])->row_array();

        $config['upload_path'] = './assets/img/bukti/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']     = '3000';
        // $config['max_width'] = '1024';
        // $config['max_height'] = '1000';
        $config['file_name'] = 'pro' . time();

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $gambar_lama = $data['boking']['image'];
            if ($gambar_lama != 'default.jpg') {
                unlink(FCPATH . 'assets/img/bukti/' . $gambar_lama);
            }

            $gambar_baru = $this->upload->data('file_name');
            $this->db->set('image', $gambar_baru);
        } else {
            echo "Gambar Kosong";
            exit();
        }
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">selamat berhasil upload </div>');
        redirect('booking/tranfer2');
    }

    // public function tranfer()
    // {
    //     $data['judul'] = 'tranfer';
    //     $data = $this->ModelBooking->cekData(['email' => $this->session->userdata('email')])->row_array();


    //     // $this->form_validation->set_rules('nama_user', 'Masukan Nama', 'required', ['required' => 'Nama belom diisi!!!']);
    //     $this->form_validation->set_rules('gambar', 'Username', 'required');
    //     // $this->form_validation->set_rules('gambar', 'Image Gambar', 'required', [
    //     //     'required' => 'Gambar tidak Boleh Kosong'
    //     // ]);
    //     if ($this->form_validation->run() == false) {
    //         $data['judul'] = 'transfer';
    //         $this->load->view('user/sisi_user/sidebar', $data);
    //         $this->load->view('booking/image', $data);
    //         $this->load->view('dasboard/footer2');
    //     } else {
    //         $nama = $this->input->post('nama', true);
    //         $email = $this->input->post('email', true);

    //         echo "Gambar ada";
    //         exit();

    //         $upload_image = $_FILES['image']['name'];
    //         if ($upload_image) {
    //             echo "Gambar Ada";
    //             exit();
    //             $config['upload_path'] = './assets/img/bukti/';
    //             $config['allowed_types'] = 'gif|jpg|jpeg|png';
    //             $config['max_size']     = '3000';
    //             // $config['max_width'] = '1024';
    //             // $config['max_height'] = '1000';
    //             $config['file_name'] = 'pro' . time();

    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('image')) {
    //                 $gambar_lama = $data['boking']['image'];
    //                 if ($gambar_lama != 'default.jpg') {
    //                     unlink(FCPATH . 'assets/img/bukti/' . $gambar_lama);
    //                 }

    //                 $gambar_baru = $this->upload->data('file_name');
    //                 $this->db->set('image', $gambar_baru);
    //             } else {
    //             }
    //         }

    //         $this->db->set('nama', $nama);
    //         $this->db->where('email', $email);
    //         $this->db->update('boking');

    //         $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">selamat berhasil upload </div>');
    //         redirect('tranfer2');
    //     }
    // }

    public function print()
    {
        $data['boking'] = $this->ModelBooking->getBoking()->result_array();
        $data['judul'] = 'transfer';
        $this->load->view('user/sisi_user/sidebar', $data);
        $this->load->view('booking/print', $data);
        $this->load->view('dasboard/footer2');
    }



    public function hapus()

    {
        $where = ['id_boking' => $this->uri->segment(3)];
        $this->ModelBooking->hapus($where);
        redirect('dasboard');
    }
}
