<?php

class Arrondissements extends Database {
    private $_tag_arr_id; 
    private $_tag_arr_name; 

    public function get_tag_arr_id()
    {
        return $this->_tag_arr_id;
    }
    public function set_tag_arr_id($_tag_arr_id)
    {
        $this->_tag_arr_id = $_tag_arr_id;
    }

    public function get_tag_arr_name()
    {
        return $this->_tag_arr_name;
    }
 
    public function set_tag_arr_name($_tag_arr_name)
    {
        $this->_tag_arr_name = $_tag_arr_name;
    }


    public function addTagArr($tag_arr_name)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `tag_arr` (`tag_arr_name`)
        VALUES (:tag_arr_name) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_arr_name', $tag_arr_name, PDO::PARAM_STR);
 
        $query->execute();
    }

    public function getAllTagArr(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `tag_arr`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }
}