<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pesan extends CI_Controller{
 function __construct(){
        parent::__construct();
        $this->load->model('m_makanan');
    }

 public function index(){
     $where1 = array(
      'kategori' => 'makan'
     );
     $where2 = array(
      'kategori' => 'minum'
     );
     $where3 = array(
      'kategori' => 'snack'
     );
  $data['makan'] =$this->m_makanan->edit_data($where1,'menu')->result();
  $data['minum'] =$this->m_makanan->edit_data($where2,'menu')->result();
  $data['snack'] =$this->m_makanan->edit_data($where3,'menu')->result();
  $this->load->view('menu', $data);
}
}