<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


  public function index()
  {
    if ($this->session->userdata('level') == FALSE) redirect('/');
    if ($this->session->userdata('level') == 2) redirect('/permintaanbarang');
    if ($this->session->userdata('level') == 3) redirect('/user');
    $data['title'] = 'Admin area';

    $data['barang'] = $this->db->count_all('barang');
    $data['permintaan_barang'] = $this->db->count_all('permintaan_barang');
    $data['barang_masuk'] = $this->db->count_all('barang_masuk');
    $data['barang_keluar'] = $this->db->count_all('barang_keluar');



    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/admin_v', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function button()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/button_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function card()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/card_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function color()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/color_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function border()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/border_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function animation()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/animation_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function other()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/other_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function chart()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/chart_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function table()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/table_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function blank()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/blank_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }

  public function error()
  {
    $data['title'] = 'Admin area';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('backend/404_v');
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }
}
