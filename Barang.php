<?php defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Barang_model');
    }

    function index()
    {
        $data['judul'] = "Data Barang | Selva House";
        $data['page'] = "Data Barang";
        $data['nav1'] = "";
        $data['nav2'] = "active";
        $data['nav3'] = "";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_barang'] = $this->Barang_model->get();
        $this->load->view("layout/header_admin", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer_admin", $data);
    }

    public function tambah()
    {
        
        $data['judul'] = "Tambah Data Barang | Selva House";
        $data['page'] = "Tambah Data Barang";
        $data['nav1'] = "";
        $data['nav2'] = "active";
        $data['nav3'] = "";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['tb_barang'] = $this->Barang_model->get();
        $this->form_validation->set_rules('nama_brg', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi!!!']);
        $this->form_validation->set_rules('stock', 'Stock', 'required|integer', ['required' => 'Stock Wajib di isi!!!', 'integer' => 'Stock Harus Angka!!!']);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', ['required' => 'Harga Wajib di isi!!!', 'integer' => 'Harga Harus Angka!!!']);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Wajib di isi!!!']);
        $this->form_validation->set_rules('merk', 'Merk', 'required', ['required' => 'Merk Wajib di isi!!!']);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_admin", $data);
            $this->load->view("barang/vw_tambah_barang", $data);
            $this->load->view("layout/footer_admin");
        } else {
            $data = [
                'nama_brg' => $this->input->post('nama_brg'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                'keterangan' => $this->input->post('keterangan'),
                'merk' => $this->input->post('merk'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/interface';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Barang_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
		Barang Berhasil Ditambah!</div>');
            redirect('index.php/Barang');
        }
    }

    function edit($id)
    {
        $data['judul'] = "Edit Data Barang | Selva House";
        $data['page'] = "Edit Data Barang";
        $data['nav1'] = "";
        $data['nav2'] = "active";
        $data['nav3'] = "";
        $data['tb_barang'] = $this->Barang_model->getById($id);
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_brg', 'Nama Barang', 'required', ['required' => 'Nama Barang Wajib di isi!!!']);
        $this->form_validation->set_rules('stock', 'Stock', 'required|integer', ['required' => 'Stock Wajib di isi!!!', 'integer' => 'Stock Harus Angka!!!']);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', ['required' => 'Harga Wajib di isi!!!', 'integer' => 'Harga Harus Angka!!!']);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', ['required' => 'Keterangan Wajib di isi!!!']);
        $this->form_validation->set_rules('merk', 'Merk', 'required', ['required' => 'Merk Wajib di isi!!!']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header_admin", $data);
            $this->load->view("barang/vw_edit_barang", $data);
            $this->load->view("layout/footer_admin");
        } else {
            $data = [
                'nama_brg' => $this->input->post('nama_brg'),
                'harga' => $this->input->post('harga'),
                'stock' => $this->input->post('stock'),
                'keterangan' => $this->input->post('keterangan'),
                'merk' => $this->input->post('merk'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/interface';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['tb_barang']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . '/assets/interface' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Barang_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Barang Berhasil Di Ubah !</div>');
            redirect('index.php/Barang');
        }
    }

    public function hapus($id)
    {
        $this->Barang_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Barang tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Barang Berhasil Dihapus!</div>');
        }
        redirect('index.php/Barang');
    }
}
