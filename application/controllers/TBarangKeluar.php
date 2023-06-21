<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TBarangKeluar extends CI_Controller
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
    $data['title'] = 'Transaksi Barang Keluar';
    $data['data'] = $this->db->query("SELECT * FROM tr_keluar inner join user on tr_keluar.id_user=user.id_user inner join barang on tr_keluar.id_barang=barang.id_barang inner join pelanggan on tr_keluar.id_pelanggan=pelanggan.id_pelanggan where id_bkeluar='$id'")->result();
    $data['barang'] = $this->db->query("SELECT * FROM barang")->result();
    $data['pelanggan'] = $this->db->query("SELECT * FROM pelanggan")->result();
    $data['user'] = $this->db->query("SELECT * FROM user")->result();
    $data['id'] = $id;
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('tbarangkeluar_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function tambah()
  {
    $id = $this->input->post('id');
    $jumlah = $this->input->post('jumlah_keluar');
    $id_barang = $this->input->post('id_barang');
    $id_pelanggan = $this->input->post('id_pelanggan');
    $id_user = $this->input->post('id_user');
    $data = array(
      'id_bkeluar' => $id,
      'jumlah_keluar' => $jumlah,
      'id_barang' => $id_barang,
      'id_pelanggan' => $id_pelanggan,
      'id_user' => $id_user,
    );
    $this->db->insert('tr_keluar', $data);
    redirect('tbarangkeluar/index/' . $id);
  }

  public function hapus($id_bkeluar, $id)
  {
    $this->db->where('id_trkeluar', $id);
    $this->db->delete('tr_keluar');
    redirect('tbarangkeluar/index/' . $id_bkeluar);
  }
}
