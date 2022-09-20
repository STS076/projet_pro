<?php

class Arrondissements extends Database
{
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

    /**
     * Fonction pour ajouter un arrondissement 
     */
    public function addTagArr($tag_arr_name, $tag_arr_picture, $tag_arr_summary)
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


    /**
     * fonction pour récupérer tous les arrondissements
     */
    public function getAllTagArr(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * 
        FROM `tag_arr`";
        $query = $pdo->query($sql);
        return $query->fetchAll();
    }

    /**
     * Fonction pour afficher un seul arrondissement
     */
    public function getOneArrondissement($tag_arr_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * 
        from `tag_arr` 
        -- inner join deals 
        -- on tag_arr_id_TAG_ARR=tag_arr_id 
        where `tag_arr_id`=:tag_arr_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }


    /**
     * Fonction pour récupérer les deals liés à l'arrondissement
     */
    public function GetDealsfromArr($tag_arr_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * 
        from `tag_arr` 
        inner join deals 
        on tag_arr_id_TAG_ARR=tag_arr_id 
        where `tag_arr_id`=:tag_arr_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * fonction pour compter le nombre de deals existant pour chaque arrondissement
     */
    public function getNumberofDealsbyArr($tag_arr_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT count(tag_arr_id) 
        from tag_arr 
        inner join deals 
        on tag_arr_id_TAG_ARR=tag_arr_id 
        where tag_arr_id=:tag_arr_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    /**
     * fonction permettant de modifier les arrondissements
     */
    public function amendArr($tag_arr_id, $tag_arr_name, $tag_arr_summary)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE tag_arr 
        set tag_arr_name=:tag_arr_name, tag_arr_summary=:tag_arr_summary
        WHERE tag_arr_id=:tag_arr_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_INT);
        $query->bindValue(':tag_arr_name', $tag_arr_name, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_summary', $tag_arr_summary, PDO::PARAM_STR);
        $query->execute();
    }

    /**
     * fonction permettant de supprimer les arrondissements
     */
    public function deleteArr($tag_arr_id)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE from tag_arr 
        where tag_arr_id=:tag_arr_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_INT);
        $query->execute();
    }
}
