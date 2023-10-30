<?php

class Home extends Controller{
  
  public function index() {
    $data['judul'] = 'Home';
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function page() {
    $data['judul'] = 'Page';
    $data['gambar'] = 'riefabslogo.png';
    $data['nama'] = 'RieFabsVFX';
    $data['pekerjaan'] = 'Visual Effect Artist';
    $data['umur'] = '16 Tahun';
    $this->view('templates/header', $data);
    $this->view('home/page', $data);
    $this->view('templates/footer');
  }
}

?>