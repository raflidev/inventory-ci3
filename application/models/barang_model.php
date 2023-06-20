<?php defined('BASEPATH') or exit('No direct script access allowed');

class barang_model extends CI_Model
{
  private $_table = "barang";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_barang' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();

    // save gambar to storage
    $config['upload_path']          = './upload/barang/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = uniqid();
    $config['overwrite']            = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_barang')) {
      $this->foto_barang = $this->upload->data("file_name");
    } else {
      $this->foto_barang = "default.jpg";
    }
    $this->nama_barang = $post["nama_barang"];
    $this->jenis = $post["jenis"];
    $this->kategori = $post["kategori"];
    $this->merk = $post["merk"];
    $this->satuan = $post["satuan"];
    $this->gudang = $post["gudang"];
    $this->rak = $post["rak"];
    $this->keterangan = $post["keterangan"];
    $this->tanggal = (new \DateTime())->format('Y-m-d H:i:s');
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();

    // save gambar to storage
    $config['upload_path']          = './upload/barang/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $post["nama_barang"];
    $config['overwrite']            = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_barang')) {
      $this->foto_barang = $this->upload->data("file_name");
    }
    $this->id_barang = $post["id_barang"];
    $this->nama_barang = $post["nama_barang"];
    $this->jenis = $post["jenis"];
    $this->kategori = $post["kategori"];
    $this->merk = $post["merk"];
    $this->satuan = $post["satuan"];
    $this->db->update($this->_table, $this, array('id_barang' => $post['id_barang']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_barang" => $id));
  }
}
