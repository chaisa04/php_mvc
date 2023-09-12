<?php

class Pilih_mapel extends Controller {
    public function index()
    {
        $data['judul'] = 'Pilih Mapel';
        $data['mpl'] = $this->model('Mapel_model')->getAllMapel();
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $this-> view('templates/header', $data);
        $this-> view('pilih_mapel/index', $data);
        $this-> view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Pilih_Mapel_model')->tambahData($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'dipilih', 'success', 'mata pelajaran');
            header('Location: ' .BASEURL. '/siswa' );
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' .BASEURL. '/siswa' );
            exit;
        }
    }
}