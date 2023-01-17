<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model {
  public $table = 'detail_penjualan';
  public $id = 'detail_penjualan.no_penjualan';
  public function __construct()
  {
    parent::__construct();
    
  }

  public function get()
  {
  $this->db->select('k.*,s.nama as nama, s.harga as harga');
  $this->db->from('tb_cart k');
  $this->db->join('tb_barang s', 'k.id_barang = s.id');
  $query = $this->db->get();
  return $query->result_array();
  }
  public function getById($id){
    $this->db->select('d.*, r.nama as nama, s.nama as tb_barang');
    $this->db->from('detail_penjualan d');
    $this->db->join('tb_user r', 'd.id_user = r.id');
    $this->db->join('tb_barang s', 'd.id_barang = s.id');
    $this->db->where('d.no_penjualan', $id);
    $query = $this->db->get();
    return $query->array_result();
  }
  public function getByUser($id){
    $idu = $this->session->userdata('id');
    $this->db->select('d.*, s.nama as nama_barang');
    $this->db->from('detail_penjualan d');
    $this->db->join('tb_barang s', 'd.id_barang = s.id');
    $this->db->where('d.no_penjualan',$id,'AND d.id_user =' .$id);
    $this->db->where('d.id_user=' . $idu);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function insert($data)
  {
    return $this->db->insert_batch($this->table, $data);
  }

  function charts()
    {
        $this->db->select('d.*, s.nama as tb_barang, sum(d.jumlah) as jum');
        $this->db->from('detail_penjualan d');
        $this->db->join('tb_barang s', 'd.id_barang = s.id');
        $this->db->group_by('d.id_barang');
        $query = $this->db->get();
        return $query->result_array();
    }
}
  
