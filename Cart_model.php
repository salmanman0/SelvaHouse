<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {
  public $table = 'tb_cart';
  public $id = 'tb_cart.id';
  public function __construct()
  {
    parent::__construct();
  }
  public function get(){
    $id = $this->session->userdata('id');
    $this->db->select('c.*, b.nama_brg as nama,b.merk as brand, b.harga as harga');
    $this->db->from('tb_cart c');
    $this->db->join('tb_barang b', 'c.id_barang = b.id');
    $this->db->where('c.id_user', $id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function getById($id)
  {
    $this->db->from($this->table);
    $this->db->where('id', $id);
    $query = $this->db->get();
    return $query->row_array();
  }
  public function update($where, $data){
    $this->db->where($this->table, $data, $where);
    return $this->db->affected_rows();
  }
  public function insert($data){
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }
  public function delete($id) {
    $this->db->where($this->id, $id);
    return $this->db->delete($this->table);
    return $this->db->affected_rows();
  }
  public function delete_all($id){
    $this->db->where('id_user',$id);
    return $this->db->delete($this->table);
    $this->db->from($this->table);
    return $this->db->affected_rows();
  }
  public function jumlah(){
    $id = $this->session->userdata('id');
    $this->db->select('c.*, b.nama_brg as nama,b.merk as brand, b.harga as harga');
    $this->db->from('tb_cart c');
    $this->db->join('tb_barang b', 'c.id_barang = b.id');
    $this->db->where('c.id_user', $id);
    $query = $this->db->get();
    return $query->num_rows();
  }
}

/* End of file cart_model.php */
/* Location: ./application/models/cart_model.php */