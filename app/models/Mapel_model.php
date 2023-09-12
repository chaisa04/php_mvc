<?php
 
 class Mapel_model{

   private $table = 'mata_pelajaran';
   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

        public function getAllMapel()
        {
            $this->db->query('SELECT * FROM '. $this->table);
            return $this->db->resultSet(); 
        }

        public function getMapelById($id)
        {
          $this->db->query(' SELECT * FROM '. $this->table . ' WHERE id = '.$id);
         return $this->db->single();

        }

        public function tambahDataMapel($data)
        {
          $query = "INSERT INTO mata_pelajaran
                      VALUES
                  ('', :nama_mapel, :jam_mulai, :jam_selesai)";
          
          $this->db->query($query);
          $this->db->bind('nama_mapel', $data['nama_mapel']);
          $this->db->bind('jam_mulai', $data['jam_mulai']);
          $this->db->bind('jam_selesai', $data['jam_selesai']);

          $this->db->execute();

          return $this->db->rowCount();
        }

        public function hapusDataMapel($id)
        {
          $query = "DELETE FROM mata_pelajaran WHERE id = :id";
          $this->db->query($query);
          $this->db->bind('id', $id);

          $this->db->execute();

          return $this->db->rowCount();
        }

        public function ubahDataMapel($data)
        {

          $query = "UPDATE mata_pelajaran SET
                       nama_mapel = :nama_mapel,
                       jam_mulai = :jam_mulai,
                       jam_selesai = :jam_selesai
                      WHERE id = :id";
          
          $this->db->query($query);
          $this->db->bind('nama_mapel', $data['nama_mapel']);
          $this->db->bind('jam_mulai', $data['jam_mulai']);
          $this->db->bind('jam_selesai', $data['jam_selesai']);
          $this->db->bind('id', $data['id']);

          $this->db->execute();
          return $this->db->rowCount();
        }

        public function cariDataMapel()
        {
          $keyword = $_POST['keyword'];
          $query = "SELECT * FROM mata_pelajaran WHERE nama_mapel LIKE :keyword";
          $this->db->query($query);
          $this->db->bind('keyword', "%$keyword%");
          return $this->db->resultSet();

        }
    }