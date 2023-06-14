<?php defined('BASEPATH') or exit('No direct script access allowed');

class pemasok_model extends CI_Model
{
  private $_table = "pemasok";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_pemasok' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_pemasok = uniqid();
    $this->nama = $post["nama"];
    $this->alamat = $post["alamat"];
    $this->kodepos = $post["kodepos"];
    $this->no_hp = $post["no_hp"];
    $this->namakontak = $post["namakontak"];
    $this->email = $post["email"];
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_pemasok = $post["id_pemasok"];
    $this->nama = $post["nama"];
    $this->alamat = $post["alamat"];
    $this->kodepos = $post["kodepos"];
    $this->no_hp = $post["no_hp"];
    $this->namakontak = $post["namakontak"];
    $this->email = $post["email"];
    $this->db->update($this->_table, $this, array('id_pemasok' => $post['id_pemasok']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_pemasok" => $id));
  }
}
