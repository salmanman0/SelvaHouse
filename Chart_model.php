<?php
Class Chart_model extends CI_Model
{
  function jumlah()
    {
        $this->db->group_by('tanggal');
        $this->db->select('tanggal');
        $this->db->select("count(*) as total");
        $this->db->order_by('tanggal', 'ASC');
        return $this->db->from('tb_penjualan')
          ->get()
          ->result();
    }
}
?>