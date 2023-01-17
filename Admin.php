<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Barang_model');
        $this->load->model('Penjualan_model');
        $this->load->model('User_model');
        $this->load->model('Detail_model');
        $this->load->model('Chart_model');
    }
    function index()
    {
        $data['judul'] = "Dashboard Admin | Selva House";
        $data['page'] = "Dashboard";
        $data['nav1'] = "active";
        $data['nav2'] = "";
        $data['nav3'] = "";
        //$data['nav'] = "active";
        // $data['totalb'] = $this->Detail_model->charts();
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_user'] = $this->User_model->get();
        $data['hasil']=$this->Chart_model->jumlah();
	  
        $this->load->view("layout/header_admin", $data);
        $this->load->view("admin/dashboard_admin", $data);
        $this->load->view("layout/footer_admin");
    }
}