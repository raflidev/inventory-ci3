<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("pelanggan_model");
    error_reporting(0);
    // $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Laporan';
    $data['barang'] = $this->db->get('barang')->result();
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('laporan_view');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function proses()
  {
    $post = $this->input->post();
    if ($post['jenis_laporan'] == "Daftar Barang") {
      if ($post['tgl_mulai'] == '' || $post['tgl_akhir'] == '') {
        if ($post['kategori'] == "semua") {
          $data['data'] = $this->db->get('barang')->result_array();
        } else {
          $data['data'] = $this->db->query("SELECT * from barang where kategori = '" . $post['kategori'] . "'")->result_array();
        }
      } else {
        $from = date('Y-m-d', strtotime($post['tgl_mulai']));
        $to = date('Y-m-d', strtotime($post['tgl_akhir']));
        $data['tgl_mulai'] = $post['tgl_mulai'];
        $data['tgl_akhir'] = $post['tgl_akhir'];
        if ($post['kategori'] == "semua") {
          if ($from == $to) {
            $data['data'] = $this->db->query("SELECT * from barang where tanggal = '$from'")->result_array();
          } else {
            $data['data'] = $this->db->query("SELECT * from barang where tanggal between $from and $to")->result_array();
          }
        } else {
          if ($from == $to) {
            $data['data'] = $this->db->query("SELECT * from barang where kategori = " . $post['kategori'] . " and tanggal = '$from'")->result_array();
          } else {
            $data['data'] = $this->db->query("SELECT * from barang where kategori = " . $post['kategori'] . " and tanggal between $from and $to")->result_array();
          }
        }
      }
      $data['title'] = 'Laporan Daftar Barang';
      $this->load->library('pdf');
      $this->pdf->load_view('laporan/laporan_barang', $data);
    }

    if ($post['jenis_laporan'] == "Persediaan Barang") {
      if ($post['tgl_mulai'] == '' || $post['tgl_akhir'] == '') {
        if ($post['kategori'] == "semua") {
          $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang")->result_array();
        } else {
          $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang where kategori = '" . $post['kategori'] . "'")->result_array();
        }
      } else {
        $from = date('Y-m-d', strtotime($post['tgl_mulai']));
        $to = date('Y-m-d', strtotime($post['tgl_akhir']));
        $data['tgl_mulai'] = $post['tgl_mulai'];
        $data['tgl_akhir'] = $post['tgl_akhir'];
        if ($post['kategori'] == "semua") {
          if ($from == $to) {
            $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang where tanggal = '$from'")->result_array();
          } else {
            $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang where tanggal between $from and $to")->result_array();
          }
        } else {
          if ($from == $to) {
            $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang where kategori = " . $post['kategori'] . " and tanggal = '$from'")->result_array();
          } else {
            $data['data'] = $this->db->query("SELECT * from persediaan inner join barang on persediaan.id_barang=barang.id_barang where kategori = " . $post['kategori'] . " and tanggal between $from and $to")->result_array();
          }
        }
      }
      $data['title'] = 'Laporan Daftar Persediaan Barang';
      $this->load->library('pdf');
      $this->pdf->load_view('laporan/laporan_persediaan_barang', $data);
    }

    if ($post['jenis_laporan'] == "Barang Masuk") {
      $data['title'] = 'Laporan Daftar Barang Masuk';
      $data['data'] = $this->db->get('barang')->result();
      $this->load->view('laporan_barang_masuk', $data);
    }

    if ($post['jenis_laporan'] == "Barang Keluar") {
      $data['data'] = $this->db->get('barang')->result();
      $this->load->view('laporan_barang_keluar', $data);
    }

    if ($post['jenis_laporan'] == "Permintaan Barang") {
      $data['data'] = $this->db->get('barang')->result();
      $this->load->view('laporan_permintaan_barang', $data);
    }
  }
}
