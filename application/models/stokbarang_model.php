<?php defined('BASEPATH') or exit('No direct script access allowed');

class stokbarang_model extends CI_Model
{
  private $_table = "persediaan";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getBarang()
  {
    $this->db->select('*');
    $this->db->from('persediaan');
    $this->db->join('barang', 'barang.id_barang = persediaan.id_barang');
    $query = $this->db->get();
    return $query->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_persediaan' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_barang = $post["id_barang"];
    $this->stok_barang = $post["stok_barang"];
    $this->stok_minimum = $post["stok_minimum"];
    $this->id_barang = $post["id_barang"];
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_persediaan = $post["id_persediaan"];
    $this->id_barang = $post["id_barang"];
    $this->stok_barang = $post["stok_barang"];
    $this->stok_minimum = $post["stok_minimum"];
    $this->id_barang = $post["id_barang"];
    $this->db->update($this->_table, $this, array('id_persediaan' => $post['id_persediaan']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_persediaan" => $id));
  }
}
