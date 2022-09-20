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


    /**
     * fonction permettant d'ajouter une catégorie
     */
    public function addTagCategory($tag_categories_name, $tag_categories_summary)
    {

        $pdo = parent::connectDb();
        $sql = "INSERT INTO `tag_categories` (`tag_categories_name`, tag_categories_summary)
        VALUES (:tag_categories_name, :tag_categories_summary) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_categories_name', $tag_categories_name, PDO::PARAM_STR);
        $query->bindValue(':tag_categories_summary', $tag_categories_summary, PDO::PARAM_STR);


        $query->execute();
    }

    /**
     * fonction permettant de récupérer une seule catégorie
     */
    public function getOneCategory($tag_categories_id): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * from `tag_categories` where tag_categories_id=:tag_categories_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch();
        return $result;
    }

    /**
     * fonction permettant de récupérer toutes les catégories
     */
    public function getAllTagCategory(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `tag_categories`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }

    /**
     * fonction permettant de modifier une catégorie
     */
    public function amendCategory($tag_categories_id, $tag_categories_name, $tag_categories_summary)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE tag_categories 
        set tag_categories_name=:tag_categories_name, tag_categories_summary=:tag_categories_summary
        WHERE tag_categories_id=:tag_categories_id";

        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_INT);
        $query->bindValue(':tag_categories_name', $tag_categories_name, PDO::PARAM_STR);
        $query->bindValue(':tag_categories_summary', $tag_categories_summary, PDO::PARAM_STR);


        $query->execute();
    }

    /**
     * fonction permettant de récupérer le nombre de deals existant par catégories
     */
    public function getNumberofDealsbyCat($tag_categories_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT count(tag_categories_id) 
        from tag_categories 
        inner join deals_has_cat 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join deals 
        on deals_id_DEALS=deals_id
        where tag_categories_id=:tag_categories_id";

        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }


    /**
     * permet de récupérer les deals liés à une catégorie
     */
    public function getDealsfromCat($tag_categories_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from `tag_categories`
        inner join deals_has_cat 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join deals 
        on deals_id_DEALS=deals_id
        where tag_categories_id=:tag_categories_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }


    /**
     * fonction permettant d'effacer une catégorie
     */
    public function deleteCategory($tag_categories_id)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE from tag_categories 
        where tag_categories_id=:tag_categories_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_INT);
        $query->execute();
    }
}
