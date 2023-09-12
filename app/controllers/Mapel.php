<?php

class Mapel extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mapel';
        $data['mpl'] = $this->model('Mapel_model')->getAllMapel();
        $this-> view('templates/header', $data);
        $this-> view('mapel/index', $data);
        $this-> view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mapel';
        $data['mpl'] = $this->model('Mapel_model')->getMapelById($id);
        $this-> view('templates/header', $data);
        $this-> view('mapel/detail', $data);
        $this-> view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Mapel_model')->tambahDataMapel($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'Mata Pelajaran ');
            header('Location: ' .BASEURL. '/mapel' );
            exit;
        }else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'Mata Pelajaran');
            header('Location: ' .BASEURL. '/mapel' );
            exit;
        }
    }

    public function hapus($id)
        {
            if($this->model('Mapel_model')->hapusDataMapel($id) > 0 ){
                Flasher::setFlash('berhasil', 'dihapus', 'success', 'Mata Pelajaran');
                header('Location: ' .BASEURL. '/mapel' );
                exit;
            }else {
                Flasher::setFlash('gagal', 'dihapus', 'danger', 'Mata Pelajaran');
                header('Location: ' .BASEURL. '/mapel' );
                exit;
            }
        }

        public function getubah()
        {
           echo json_encode( $this->model('Mapel_model')->getMapelById($_POST['id']));
        }

        public function ubah()
        {
            if($this->model('Mapel_model')->ubahDataMapel($_POST) > 0 ){
                Flasher::setFlash('berhasil', 'diubah', 'success', 'Mata Pelajaran');
                header('Location: ' .BASEURL. '/mapel' );
                exit;
            }else {
                Flasher::setFlash('gagal', 'diubah', 'danger', 'Mata Pelajaran');
                header('Location: ' .BASEURL. '/mapel' );
                exit;
            }
        }

        public function cari()
        {
            $data['judul'] = 'Daftar Mapel';
            $data['mpl'] = $this->model('Mapel_model')->cariDataMapel();
            $this-> view('templates/header', $data);
            $this-> view('mapel/index', $data);
            $this-> view('templates/footer');
        }

}