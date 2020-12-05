<?php
    include "lib/database.php";
    include "helpers/format.php"
?>

<?php

    class news
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_news($title,$thumbnail,$recomment,$descripsion){
            $title = $this->fm->validation($title);
            $thumbnail = $this->fm->validation($thumbnail);
            $recomment = $this->fm->validation($recomment);
            $descripsion = $this->fm->validation($descripsion);
            $content = $this->fm->validation($content);

    
            $title = mysqli_real_escape_string($this->db->link, $title);
            $thumbnail = mysqli_real_escape_string($this->db->link, $thumbnail);
            $recomment = mysqli_real_escape_string($this->db->link, $recomment);
            $descripsion = mysqli_real_escape_string($this->db->link, $descripsion);
            $content = mysqli_real_escape_string($this->db->link, $content);
    
            if(empty($title) || empty($thumbnail) || empty($recomment)){
                $alert = "title and thumbnail and recomment must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO news (title,thumbnail,recomment,descripsion,content) VALUES ('$title', '$thumbnail', '$recomment','$descripsion','$content')";
                $result = $this->db->select($query);
                
            }
        }
        public function show_1news(){
            $query = "SELECT * FROM news order by id limit 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_2news(){
            $query = "SELECT * FROM news order by id limit 1,2";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_1newskhuyenmai(){
            $query = "SELECT * FROM news where status = 1 
                    order by id limit 1";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_2newskhuyenmai(){
            $query = "SELECT * FROM news where status = 1 
                    order by id limit 1,2";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_news(){
            $query = "SELECT * FROM news order by id";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_news($id){
            $query = "DELETE FROM news WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_news($id,$status,$modifiedby){
            $query = "UPDATE news
            SET content ='$content' 
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>