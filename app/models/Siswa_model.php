<?php
 
 class Siswa_model{

   private $table = 'siswa';
   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

        public function getAllSiswa()
        {
            $this->db->query('SELECT * FROM '. $this->table);
            return $this->db->resultSet(); 
        }

        public function getSiswaById($id)
        {
          $this->db->query(' SELECT * FROM '. $this->table . ' WHERE id = '.$id);
         return $this->db->single();

        }

        public function tambahDataSiswa($data)
        {
          $query = "INSERT INTO siswa
                      VALUES
                  ('', :nama, :nis, :email, :jurusan, :no_telp, :alamat, :mata_pelajaran_id, :mata_pelajaran_id, :mata_pelajaran_id)";
          
          $this->db->query($query);
          $this->db->bind('nama', $data['nama']);
          $this->db->bind('nis', $data['nis']);
          $this->db->bind('email', $data['email']);
          $this->db->bind('jurusan', $data['jurusan']);
          $this->db->bind('alamat', $data['alamat']);
          $this->db->bind('no_telp', $data['no_telp']);
          $this->db->bind('mata_pelajaran_id', $data['mata_pelajaran_id']);
          $this->db->bind('mata_pelajaran_id', $data['mata_pelajaran_id']);
          $this->db->bind('mata_pelajaran_id', $data['mata_pelajaran_id']);

          $this->db->execute();

          return $this->db->rowCount();
        }

        public function hapusDataSiswa($id)
        {
          $query = "DELETE FROM siswa WHERE id = :id";
          $this->db->query($query);
          $this->db->bind('id', $id);

          $this->db->execute();

          return $this->db->rowCount();
        }

        public function ubahDataSiswa($data)
        {

          $query = "UPDATE siswa SET
                       nama = :nama,
                       nis = :nis,
                       email = :email,
                       jurusan = :jurusan,
                       alamat = :alamat,
                       no_telp = :no_telp,
                      WHERE id = :id";
          
          $this->db->query($query);
          $this->db->bind('nama', $data['nama']);
          $this->db->bind('nis', $data['nis']);
          $this->db->bind('email', $data['email']);
          $this->db->bind('jurusan', $data['jurusan']);
          $this->db->bind('alamat', $data['alamat']);
          $this->db->bind('no_telp', $data['no_telp']);
          $this->db->bind('id', $data['id']);

          $this->db->execute();
          return $this->db->rowCount();
        }

        public function cariDataSiswa()
        {
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM siswa WHERE nama LIKE :keyword OR jurusan LIKE :keyword";
          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");
          return $this->db->resultSet();

        }
 }