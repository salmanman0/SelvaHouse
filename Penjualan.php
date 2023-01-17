<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
    }
    function index()
    {
        $data['judul'] = "Riwayat Penjualan | Selva House";
        $data['page'] = "Riwayat Penjualan";
        $data['nav1'] = "";
        $data['nav2'] = "";
        $data['nav3'] = "active";
        $data['tb_penjualan'] = $this->Penjualan_model->get();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header_admin", $data);
        $this->load->view("penjualan/vw_penjualan", $data);
        $this->load->view("layout/footer_admin");
    }
    public function detail($id)
    {
        // $id1 = $this->detail_model->getId();
        $data['judul'] = "Detail Penjualan | Selva House";
        $data['page'] = "Detail Penjualan";
        $data['nav1'] = "";
        $data['nav2'] = "";
        $data['nav3'] = "active";
        $data['detail_penjualan'] = $this->Detail_model->getById($id);
        $data['tb_penjualan'] = $this->Penjualan_model->getByIdP($id);
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('status', 'Status', 'required', [
            'required' => 'Status Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_admin", $data);
            $this->load->view("penjualan/vw_detail_penjualan", $data);
            $this->load->view("layout/footer_admin");
        } else {
            $status = $this->input->post('status');
            $nojual = $this->input->post('no_penjualan');
            $this->Penjualan_model->updatestatus($status, $nojual);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil DiUbah!</div>');
            redirect('Penjualan');
        }
    }
    public function export()
    {
        $dompdf = new Dompdf();
        $this->data['all_jual'] = $this->Penjualan_model->get();
        $this->data['title'] = 'Laporan Data Penjualan';
        $this->data['no'] = 1;
        $dompdf->setPaper('A4', 'Landscape');
        $html = $this->load->view('penjualan/report', $this->data, true);
        $dompdf->load_html($html);
        $dompdf->render();
        $dompdf->stream('Laporan Data Penjualan Tanggal ' . date('d F Y'), array("Attachment" => false));
    }
}
