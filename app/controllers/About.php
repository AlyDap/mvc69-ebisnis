<?php

class About extends Controller
{
    public function index($nama = 'Ali', $pekerjaan = 'Mahasiswa')
    {
        /*echo "Hallo Nama Saya $nama, Saya Seorang $pekerjaan";*/
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        /* echo 'About/page'; */
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
