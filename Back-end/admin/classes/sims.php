<?php
    include "lib/database.php";
    include "helpers/format.php"
?>

<?php

    class sims
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_sim($sdt,$gianhap,$giaban,$idloaisim,$idkho){
            $sdt = $this->fm->validation($sdt);
            $gianhap = $this->fm->validation($gianhap);
            $giaban = $this->fm->validation($giaban);
            $idloaisim = $this->fm->validation($idloaisim);
            $idkho = $this->fm->validation($idkho);
            
            $sdt = mysqli_real_escape_string($this->db->link, $sdt);
            $gianhap = mysqli_real_escape_string($this->db->link, $gianhap);
            $giaban = mysqli_real_escape_string($this->db->link, $giaban);
            $idloaisim = mysqli_real_escape_string($this->db->link, $idloaisim);
            $idkho = mysqli_real_escape_string($this->db->link, $idkho);
    
            if(empty($tensim)){
                $alert = "loai sim must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO sim (sdt,gianhap,giaban,status,idloaisim,idkho) VALUES ('$sdt','$gianhap','$giaban',1,'$idloaisim','$idkho')";
                $result = $this->db->select($query);
            }
        }
        public function show_sim(){
            $query = "SELECT * FROM sim order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_sim($id){
            $query = "DELETE FROM sim WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_sim($sdt,$gianhap,$giaban,$idloaisim,$idkho,$id){
            $query = "UPDATE sim
            SET sdt ='$sdt', gianhap ='$gianhap', giaban ='$giaban', idloaisim =$idloaisim, idkho =$idkho
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>