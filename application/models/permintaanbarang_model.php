<?php defined('BASEPATH') or exit('No direct script access allowed');

class permintaanbarang_model extends CI_Model
{
  private $_table = "permintaan_barang";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_permintaan' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->tgl_permintaan = $post["tgl_permintaan"];
    $this->nama_peminta = $post["nama_peminta"];
    $this->jabatan_permintaan = $post["jabatan_permintaan"];
    $this->ket_peminta = $post["ket_peminta"];
    $this->status = 0;
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_permintaan = $post["id_permintaan"];
    $this->tgl_permintaan = $post["tgl_permintaan"];
    $this->nama_peminta = $post["nama_peminta"];
    $this->jabatan_permintaan = $post["jabatan_permintaan"];
    $this->ket_peminta = $post["ket_peminta"];
    $this->status = $post["status"];
    $this->db->update($this->_table, $this, array('id_permintaan' => $post['id_permintaan']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_permintaan" => $id));
  }
}
