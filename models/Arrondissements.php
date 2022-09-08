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


    public function addTagArr($tag_arr_name, $tag_arr_picture,$tag_arr_summary )
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `tag_arr` (`tag_arr_name`, tag_arr_picture, tag_arr_summary)
        VALUES (:tag_arr_name, :tag_arr_picture,:tag_arr_summary ) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_arr_name', $tag_arr_name, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_picture', $tag_arr_picture, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_summary', $tag_arr_summary, PDO::PARAM_STR);
 
        $query->execute();
    }

    public function getAllTagArr(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `tag_arr`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }

    public function getOneArrondissement($tag_arr_id): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * from `tag_arr` where `tag_arr_id`=:tag_arr_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch();
        return $result;
    }
}