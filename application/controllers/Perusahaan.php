<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{


  public function index()
  {
    $data['title'] = 'Profil Perusahaan';
    $this->load->view('_part/backend_head', $data);
    $this->load->view('_part/backend_sidebar_v');
    $this->load->view('_part/backend_topbar_v');
    $this->load->view('perusahaan_view', $data);
    $this->load->view('_part/backend_footer_v');
    $this->load->view('_part/backend_foot');
  }
}
