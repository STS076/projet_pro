<?php

class Categories extends Database
{
    private $_tag_categories_id;
    private $_tag_categories_name;

    public function get_tag_categories_id()
    {
        return $this->_tag_categories_id;
    }
    public function set_tag_categories_id($_tag_categories_id)
    {
        $this->_tag_categories_id = $_tag_categories_id;
    }

    public function get_tag_categories_name()
    {
        return $this->_tag_categories_name;
    }
    public function set_tag_categories_name($_tag_categories_name)
    {
        $this->_tag_categories_name = $_tag_categories_name;
    }


    public function addTagCategory($tag_categories_name)
    {

        $pdo = parent::connectDb();
        $sql = "INSERT INTO `tag_categories` (`tag_categories_name`)
        VALUES (:tag_categories_name) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_categories_name', $tag_categories_name, PDO::PARAM_STR);
 

        $query->execute();
    }

    public function getOneCategory($tag_categories_name): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * from `tag_categories` where tag_categories_name=:tag_categories_name" ;

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_categories_name', $tag_categories_name, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch();
        return $result;
    }

    public function getAllTagCategory(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `tag_categories`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }
}
