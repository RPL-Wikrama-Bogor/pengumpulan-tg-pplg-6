<?php

class Buku extends Controller {
  public function index() {
    $data['page'] = 'Data Buku';
    $data['buku'] = $this->model('PjmModel')->getAllBarang();
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
  }

  public function search() {

  }

  public function tambah() {
    $data['page'] = 'Tambah Buku';
    $this->view('templates/header', $data);
    $this->view('buku/create');
    $this->view('templates/footer');
  }

  public function simpanBarang() {
    if($this->model('PjmModel')->tambahBarang($_POST) > 0) {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  public function edit($id) {
    $data['page'] = "Edit Buku";
    $data['buku'] = $this->model('PjmModel')->getBarangById($id);
    $this->view('templates/header', $data);
    $this->view('buku/edit', $data);
    $this->view('templates/footer');
  }

  public function updateBarang() {
    if ($this->model('PjmModel')->updateDataBarang($_POST) > 0) {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  public function hapus($id) {
    if ($this->model('PjmModel')->deleteBarang($id) > 0) {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    } else {
      header('location: ' . BASE_URL . '/buku/index');
      exit;
    }
  }

  // Cari Peminjam 
  public function cariData()
  {
    $data['page'] = 'Data Buku';
    $data['buku'] = $this->model('PjmModel')->cariDataPeminjam();
    $this->view('templates/header', $data);
    $this->view('buku/index', $data);
    $this->view('templates/footer');
  }
}