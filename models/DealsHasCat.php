<?php

class DealsHasCat extends Database
{
    private $_tag_categories_id_TAG_CATEGORIES;
    private $_deals_id_DEALS;


    public function get_tag_categories_id_TAG_CATEGORIES()
    {
        return $this->_tag_categories_id_TAG_CATEGORIES;
    }
    public function set_tag_categories_id_TAG_CATEGORIES($_tag_categories_id_TAG_CATEGORIES)
    {
        $this->_tag_categories_id_TAG_CATEGORIES = $_tag_categories_id_TAG_CATEGORIES;
    }

    public function get_deals_id_DEALS()
    {
        return $this->_deals_id_DEALS;
    }
    public function set_deals_id_DEALS($_deals_id_DEALS)
    {
        $this->_deals_id_DEALS = $_deals_id_DEALS;
    }

    /**
     * table intermédiaire entre deals et tag_categories et permet de remplir cette table. ajoute l'id des deals et des catégories. 
     */
    public function addDealCategory($tag_categories_id_TAG_CATEGORIES, $deals_id_DEALS)
    {
        $pdo = parent::connectDb();

        $sql = "INSERT INTO `deals_has_cat` (tag_categories_id_TAG_CATEGORIES, deals_id_DEALS)
        VALUES (:tag_categories_id_TAG_CATEGORIES,:deals_id_DEALS) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_INT);
        $query->bindValue(':tag_categories_id_TAG_CATEGORIES', $tag_categories_id_TAG_CATEGORIES, PDO::PARAM_INT);

        $query->execute();
    }

    /**
     * permet de supprimer les catégories d'un deal si modifie. supprime et ensuite ajoute. 
     */
    public function deleteCatDeal($deals_id_DEALS)
    {
        $pdo = parent::connectDb();

        $sql = "DELETE from deals_has_cat 
        where deals_id_DEALS=:deals_id_DEALS; ";

        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_INT);
        $query->execute();

    }

        /**
     * permet de supprimer les catégories d'un deal si modifie. supprime et ensuite ajoute. 
     */
    public function deleteCatCat($tag_categories_id_TAG_CATEGORIES)
    {
        $pdo = parent::connectDb();

        $sql = "DELETE from deals_has_cat 
        where tag_categories_id_TAG_CATEGORIES=:tag_categories_id_TAG_CATEGORIES; ";

        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id_TAG_CATEGORIES', $tag_categories_id_TAG_CATEGORIES, PDO::PARAM_INT);
        $query->execute();

    }

    /**
     * récupère les catégories d'un deal
     */
    public function getDealCategory()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from `deals_has_cat` 
        inner join  deals 
        on deals_id_deals=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchall();
        return $result;
    }
}
