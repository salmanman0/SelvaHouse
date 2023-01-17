<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Dashboard
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Dashboard extends CI_Controller
{   
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');
    $this->load->model('Cart_model');
    $this->load->model('Penjualan_model');
    $this->load->model('Detail_model');
    $this->load->model('User_model', 'userrole');
  }

  public function index() {
    $data['barang'] = $this->Barang_model->get();
    $data['user'] = $this->userrole->getBy();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view('layout/header',$data);
    $this->load->view('home',$data);
    $this->load->view('layout/footer');
  }
  public function yasmeera() {
    $data['barang'] = $this->Barang_model->get();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view('layout/header',$data);
    $this->load->view('product/yasmeera',$data);
    $this->load->view('layout/footer');
  }
  public function wanoja() {
    $data['barang'] = $this->Barang_model->get();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view('layout/header',$data);
    $this->load->view('product/wanoja',$data);
    $this->load->view('layout/footer');
  }
  public function labella() {
    $data['barang'] = $this->Barang_model->get();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view('layout/header',$data);
    $this->load->view('product/labella',$data);
    $this->load->view('layout/footer');
  }
  public function cart($id){
    $data['cart'] = $this->Cart_model->get();
    $data['user'] = $this->userrole->getBy();
    $data['barang'] = $this->Barang_model->getById($id);
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->form_validation->set_rules('jumlah', 'Jumlah', 'required', 
    ['required' => 'Jumlah Wajib Diisi']);

    if($this->form_validation->run() == false){
      $this->load->view("layout/header", $data);
      $this->load->view("keranjang", $data);
      $this->load->view("layout/footer");
    }
    else{
      $data = [
        'id_user' => $this->session->userdata['id'],
        'id_barang' => $this->input->post('id'),
        'jumlah' => $this->input->post('jumlah'),
        'total' => $this->input->post('total'),
        'tanggal' => $this->input->post('tanggal'),
      ];
      $this->Cart_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success"
      role="alert">Produk Berhasil Ditambah!</div>'); 
      redirect('index.php/Dashboard/');
    }
  }
  public function detail()
  {
    $data['cart'] = $this->Cart_model->get();
    $data['user'] = $this->userrole->getBy();
    $data['barang'] = $this->Barang_model->get();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view("layout/header", $data);
    $this->load->view("detail_keranjang", $data);
    $this->load->view("layout/footer");
  }
  public function delkeranjang($id){
    $this->Cart_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    Data Berhasil dihapus dari Keranjang</div>');
    redirect('index.php/Dashboard/detail');
  }
  public function pesanan()
  {
    $jumlah_beli = count($this->input->post('barang'));
    $data_p = [
    'no_penjualan' => $this->input->post('no_penjualan'),
    'id_user' => $this->session->userdata('id'),
    'tanggal' => $this->input->post('tanggal'),
    'total_bayar' => $this->input->post('bayar'),
    'alamat' => $this->input->post('alamat'),
    'pembayaran' => $this->input->post('pembayaran'),
    'keterangan' => $this->input->post('keterangan'),
    ];
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048';
    $config['upload_path'] = './assets/interface/pembayaran/';
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar')) {
    $new_image = $this->upload->data('file_name');
    $this->db->set('gambar', $new_image);
    } else {
    echo $this->upload->display_errors();
    }
    }
    $data_detail = [];
    for ($i = 0; $i < $jumlah_beli; $i++) {
    array_push($data_detail, ['id_barang' => $this->input->post('barang')[$i]]);
    $data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
    $data_detail[$i]['id_user'] = $this->session->userdata('id');
    $data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
    $data_detail[$i]['total'] = $this->input->post('total_p')[$i];
    }
    if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
      for($i = 0 ; $i < $jumlah_beli; $i++) {
        $this->Barang_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_barang']) or die('gagal min stok');
      }
      $id_us = $this->session->userdata('id');
      $this->Cart_model->delete_all($id_us);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesanan Berhasil
      dibuat!</div>');
      redirect('index.php/Dashboard/');
      } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pesanan Gagal
      dibuat!</div>');
      redirect('index.php/Dashboard/');
    }
  }
  public function pembelian(){
    $data['user'] = $this->User_model->getBy();
    $data['pembelian'] =$this->Penjualan_model->getByUser();
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->load->view('layout/header', $data);
    $this->load->view('pembalian_user', $data);
    $this->load->view('layout/footer', $data);
  }
  public function statusbeli($id)
  {
    $data['user'] = $this->userrole->getBy();
    $data['pembelian'] = $this->Penjualan_model->getByUser2($id);
    $data['detailbeli'] = $this->Detail_model->getByUser($id);
    $data['jlh'] = $this->Cart_model->jumlah();
    $this->form_validation->set_rules('status', 'Status', 'required', [
    'required' => 'Status Wajib di isi'
    ]);
    if ($this->form_validation->run() == false) {
    $this->load->view("layout/header", $data);
    $this->load->view("detail_beli", $data);
    $this->load->view("layout/footer");
    } else {
    $status = $this->input->post('status');
    $nojual = $this->input->post('no_penjualan');
    $this->Penjualan_model->updatestatus($status, $nojual);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil
    DiUbah!</div>');
    redirect('index.php/Dashboard/pembelian');
    }
  }
}


/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */