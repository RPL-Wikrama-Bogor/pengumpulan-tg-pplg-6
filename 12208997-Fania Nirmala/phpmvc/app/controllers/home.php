<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $data['gambar'] = 'aku.jpg';
        $data['nama'] = 'machuu';
        $data['pekerjaan'] = 'web developer';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}

?>