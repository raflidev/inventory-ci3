<?php defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan_model extends CI_Model
{
  private $_table = "pelanggan";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_pelanggan' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();
    $this->id_pelanggan = uniqid();
    $this->nama = $post["nama"];
    $this->alamat = $post["alamat"];
    $this->kodepos = $post["kodepos"];
    $this->no_telp = $post["no_telp"];
    $this->namakontak = $post["namakontak"];
    $this->email = $post["email"];
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();
    $this->id_pelanggan = $post["id_pelanggan"];
    $this->nama = $post["nama"];
    $this->alamat = $post["alamat"];
    $this->kodepos = $post["kodepos"];
    $this->no_telp = $post["no_telp"];
    $this->namakontak = $post["namakontak"];
    $this->email = $post["email"];
    $this->db->update($this->_table, $this, array('id_pelanggan' => $post['id_pelanggan']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_pelanggan" => $id));
  }
}
