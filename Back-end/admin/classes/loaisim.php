<?php
    include "lib/database.php";
    include "helpers/format.php"
?>

<?php

    class loaisim
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_loaisim($tenloaisim){
            $tenloaisim = $this->fm->validation($tenloaisim);
            
            $tenloaisim = mysqli_real_escape_string($this->db->link, $tenloaisim);
    
            if(empty($tenloaisim)){
                $alert = "loai sim must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO loaisim (tenloaisim) VALUES ('$tenloaisim')";
                $result = $this->db->select($query);
            }
        }
        public function show_loaisim(){
            $query = "SELECT * FROM loaisim order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_loaisimById($id){
            $query = "SELECT * FROM loaisim where id=$id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_loaisim($id){
            $query = "DELETE FROM loaisim WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_loaisim($tenloaisim,$id){
            $query = "UPDATE loaisim
            SET tenloaisim ='$tenloaisim' 
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>