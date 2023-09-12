<?php
 
 class Pilih_Mapel_model{
    private $table = 'siswa_mata_pelajaran';
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

    public function tambahData($data)
    {
        // print_r($data);
        $total_mapel = count($data['mata_pelajaran_id']);

        for ($i=0; $i < $total_mapel; $i++) { 
            $query = "INSERT INTO siswa_mata_pelajaran
                        VALUES 
                    ('', :siswa_id, :mata_pelajaran_id )";
            
            $this->db->query($query);
            $this->db->bind('siswa_id', $data['siswa_id']);
            $this->db->bind('mata_pelajaran_id', $data['mata_pelajaran_id'][$i]);
            
            $this->db->execute();
    
        }
        
        return $this->db->rowCount();
    }
 }
