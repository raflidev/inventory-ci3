<?php defined('BASEPATH') or exit('No direct script access allowed');

class barangkeluar_model extends CI_Model
{
  private $_table = "barang_keluar";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_bkeluar' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->no_bukti = $post["no_bukti"];
    $this->tgl_keluar = $post["tgl_keluar"];
    $this->pengurus = $post["pengurus"];
    $this->ket_keluar = $post["ket_keluar"];
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_bkeluar = $post["id_bkeluar"];
    $this->no_bukti = $post["no_bukti"];
    $this->tgl_keluar = $post["tgl_keluar"];
    $this->pengurus = $post["pengurus"];
    $this->ket_keluar = $post["ket_keluar"];
    $this->db->update($this->_table, $this, array('id_bkeluar' => $post['id_bkeluar']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_bkeluar" => $id));
  }
}
