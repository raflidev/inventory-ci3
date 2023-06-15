<?php defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
  private $_table = "user";

  public function getAll()
  {
    return $this->db->get($this->_table)->result();
  }

  public function get($username)
  {
    return $this->db->get_where($this->_table, ['username' => $username])->row();
  }

  public function getById($id)
  {
    return $this->db->get_where($this->_table, ['id_user' => $id])->row();
  }

  public function save()
  {
    $post = $this->input->post();

    $config['upload_path']          = './upload/user/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = uniqid();
    $config['overwrite']            = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_profil')) {
      $this->foto_profil = $this->upload->data("file_name");
    } else {
      $this->foto_profil = "default.jpg";
    }


    $this->username = $post["username"];
    $this->password = $post["password"];
    $this->nama_lengkap = $post["nama_lengkap"];
    $this->level = $post["level"];
    $this->email = $post["email"];
    $this->no_telp = $post["no_telp"];
    $this->db->insert($this->_table, $this);
  }

  public function edit()
  {
    $post = $this->input->post();

    $config['upload_path']          = './upload/user/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = uniqid();
    $config['overwrite']            = true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_profil')) {
      $this->foto_profil = $this->upload->data("file_name");
    }

    $this->id_user = $post["id_user"];
    $this->username = $post["username"];
    $this->password = $post["password"];
    $this->nama_lengkap = $post["nama_lengkap"];
    $this->level = $post["level"];
    $this->email = $post["email"];
    $this->no_telp = $post["no_telp"];
    $this->db->update($this->_table, $this, array('id_user' => $post['id_user']));
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array("id_user" => $id));
  }
}
