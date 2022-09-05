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

    public function getDealCategory($deals_id){
        $pdo = parent::connectDb();
        $sql = "SELECT * from `deals_has_cat` inner join  deals on deals_id_deals=deals_id where `deals_id`=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_STR);
        $query->execute();

        $id = $pdo->lastInsertId();

        $result = $query->fetchall();
        return $result;
    }
}
