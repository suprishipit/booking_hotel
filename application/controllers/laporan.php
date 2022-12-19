<?php
defined('BASEPATH') or exit('No Direct script access allowed');
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    // public function laporan_buku()
    // {
    //     $data['judul'] = 'Laporan Data Buku';
    //     $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    //     $data['buku'] = $this->ModelBuku->getBuku()->result_array();
    //     $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('buku/laporan_buku', $data);
    //     $this->load->view('templates/footer');
    // }


    // cetak admin

    public function cetak_data_admin()
    {
        $data['admin'] = $this->ModelUser->getAdmin()->result_array();

        $this->load->view('admin/laporan_print_admin', $data);
    }

    public function laporan_admin_pdf()
    {
        $data['admin'] = $this->ModelUser->getAdmin()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/Booking_hotel/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('admin/laporan_pdf_admin', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_admin.pdf", array('Attachment' =>
        0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel_admin()
    {
        $data = array(
            'title' => 'Laporan data admin',
            'admin' => $this->ModelUser->getAdmin()->result_array()
        );

        $this->load->view('admin/export_excel_admin', $data);
    }




    // cetak user

    public function cetak_data_user()
    {
        $data['user'] = $this->ModelCustamer->getUser()->result_array();

        $this->load->view('user/laporan_print_user', $data);
    }

    public function laporan_user_pdf()
    {
        $data['user'] = $this->ModelCustamer->getUser()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/booking_hotel/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('user/laporan_pdf_user', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_user.pdf", array('Attachment' =>
        0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel_user()
    {
        $data = array(
            'title' => 'Laporan data user',
            'user' => $this->ModelCustamer->getUser()->result_array()
        );

        $this->load->view('user/export_excel_user', $data);
    }





    // bookingan

    public function cetak_data_booking()
    {
        $data['boking'] = $this->ModelBooking->getBoking()->result_array();

        $this->load->view('booking/laporan_print_booking', $data);
    }

    public function laporan_booking_pdf()
    {
        $data['boking'] = $this->ModelBooking->getBoking()->result_array();
        // $this->load->library('dompdf_gen');
        $sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/booking_hotel/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();
        $this->load->view('booking/laporan_pdf_booking', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream("laporan_data_booking.pdf", array('Attachment' =>
        0));
        // nama file pdf yang di hasilkan
    }

    public function export_excel_booking()
    {
        $data = array(
            'title' => 'Laporan data bookingan',
            'boking' => $this->ModelBooking->getBoking()->result_array()
        );

        $this->load->view('booking/export_excel_booking', $data);
    }
}
