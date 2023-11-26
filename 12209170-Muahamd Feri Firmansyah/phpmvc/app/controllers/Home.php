<?php 
class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $data['gambar'] = '../../public/img/StikerZuka.jpg';
        $data['nama'] = 'Zuka';
        $data['pekerjaan'] = 'Seorang panda';
        $this->view('templates/header', $data);
        $this->view('home/page', $data);
        $this->view('templates/footer');
    }
}












// class gina {
//     public function index($nama = 'jojo', $pekerjaan = 'pelajar')
//     {
//         echo "halo, nama saya $nama dan saya merupakan seorang $pekerjaan";
//     }
// }