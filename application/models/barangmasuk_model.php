<?php defined('BASEPATH') or exit('No direct script access allowed');

class barangmasuk_model extends CI_Model
{
  private $_table = "barang_masuk";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_bmasuk' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->no_bukti = $post["no_bukti"];
    $this->tgl_masuk = $post["tgl_masuk"];
    $this->pengurus = $post["pengurus"];
    $this->ket_masuk = $post["ket_masuk"];
    $this->tanggal = (new \DateTime())->format('Y-m-d H:i:s');
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_bmasuk = $post["id_bmasuk"];
    $this->no_bukti = $post["no_bukti"];
    $this->tgl_masuk = $post["tgl_masuk"];
    $this->pengurus = $post["pengurus"];
    $this->ket_masuk = $post["ket_masuk"];
    $this->db->update($this->_table, $this, array('id_bmasuk' => $post['id_bmasuk']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_bmasuk" => $id));
  }
}
