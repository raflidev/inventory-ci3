<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TBarangMasuk extends CI_Controller
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
    if ($this->session->userdata('level') == FALSE) redirect('/');
    $data['title'] = 'Transaksi Barang Masuk';
    $data['data'] = $this->db->query("SELECT * FROM tr_masuk inner join user on tr_masuk.id_user=user.id_user inner join barang on tr_masuk.id_barang=barang.id_barang inner join pemasok on tr_masuk.id_pemasok=pemasok.id_pemasok where id_bmasuk='$id'")->result();
    $data['barang'] = $this->db->query("SELECT * FROM barang")->result();
    $data['pemasok'] = $this->db->query("SELECT * FROM pemasok")->result();
    $data['user'] = $this->db->query("SELECT * FROM user")->result();
    $data['id'] = $id;
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('tbarangmasuk_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $id = $this->input->post('id');
    $jumlah = $this->input->post('jumlah_masuk');
    $id_barang = $this->input->post('id_barang');
    $id_pemasok = $this->input->post('id_pemasok');
    $id_user = $this->input->post('id_user');
    $data = array(
      'id_bmasuk' => $id,
      'jumlah_masuk' => $jumlah,
      'id_barang' => $id_barang,
      'id_pemasok' => $id_pemasok,
      'id_user' => $id_user,
    );
    $this->db->insert('tr_masuk', $data);
    redirect('tbarangmasuk/index/' . $id);
  }

  public function hapus($id_bmasuk, $id)
  {
    $this->db->where('id_trmasuk', $id);
    $this->db->delete('tr_masuk');
    redirect('tbarangmasuk/index/' . $id_bmasuk);
  }
}
