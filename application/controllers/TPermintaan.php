<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TPermintaan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index($id)
  {
    if ($this->session->userdata('level') == 2) redirect('admin');
    $data['title'] = 'Transaksi Barang Permintaan';
    $data['data'] = $this->db->query("SELECT * FROM tr_permintaan inner join user on tr_permintaan.id_user=user.id_user inner join barang on tr_permintaan.id_barang=barang.id_barang where id_permintaan='$id'")->result();
    $data['barang'] = $this->db->query("SELECT * FROM barang")->result();
    $data['user'] = $this->db->query("SELECT * FROM user")->result();
    $data['id'] = $id;
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('tpermintaan_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $id = $this->input->post('id');
    $jumlah = $this->input->post('jumlah_permintaan');
    $id_barang = $this->input->post('id_barang');
    $id_user = $this->input->post('id_user');
    $data = array(
      'id_permintaan' => $id,
      'jumlah_permintaan' => $jumlah,
      'id_barang' => $id_barang,
      'id_user' => $id_user,
    );
    $this->db->insert('tr_permintaan', $data);
    redirect('tpermintaan/index/' . $id);
  }

  public function hapus($id_permintaan, $id)
  {
    $this->db->where('id_trpermintaan', $id);
    $this->db->delete('tr_permintaan');
    redirect('tpermintaan/index/' . $id_permintaan);
  }
}
