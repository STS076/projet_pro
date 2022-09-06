<?php

class Deals extends Database
{
    private string $_deals_title;
    private string $_deals_when;
    private string $_deals_where;
    private string $_deals_price;
    private string $_deals_map;
    private string $_deals_metro;
    private string $_deals_info;
    private bool $_deals_validate;

    public function get_deals_title()
    {
        return $this->_deals_title;
    }
    public function set_deals_title($deals_title)
    {
        $this->_deals_title = $deals_title;
    }

    public function get_deals_when()
    {
        return $this->_deals_when;
    }
    public function set_deals_when($deals_when)
    {
        $this->_deals_when = $deals_when;
    }

    public function get_deals_where()
    {
        return $this->_deals_where;
    }
    public function set_deals_where($deals_where)
    {
        $this->_deals_where = $deals_where;
    }

    public function get_deals_price()
    {
        return $this->_deals_price;
    }
    public function set_deals_price($deals_price)
    {
        $this->_deals_price = $deals_price;
    }

    public function get_deals_map()
    {
        return $this->_deals_map;
    }
    public function set_deals_map($deals_map)
    {
        $this->_deals_map = $deals_map;
    }

    public function get_deals_metro()
    {
        return $this->_deals_metro;
    }
    public function set_deals_metro($deals_metro)
    {
        $this->_deals_metro = $deals_metro;
    }

    public function get_deals_info()
    {
        return $this->_deals_info;
    }
    public function set_deals_info($deals_info)
    {
        $this->_deals_info = $deals_info;
    }

    public function get_deals_validate()
    {
        return $this->_deals_validate;
    }
    public function set_deals_validate($deals_validate)
    {
        $this->_deals_validate = $deals_validate;
    }

    public function addDeals(string $deals_title, string $deals_when, string $deals_where, string $deals_price, string $deals_map, string $deals_metro, string $deals_info, $tag_arr_id_TAG_ARR,$users_id_USERS ): int
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `deals` (`deals_title`, `deals_when`, `deals_where`, `deals_price`, `deals_map`, `deals_metro`, `deals_info`,  `tag_arr_id_TAG_ARR`, `users_id_USERS`)
        VALUES (:deals_title, :deals_when, :deals_where, :deals_price, :deals_map, :deals_metro, :deals_info, :tag_arr_id_TAG_ARR, :users_id_USERS) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':deals_title', $deals_title, PDO::PARAM_STR);
        $query->bindValue(':deals_when', $deals_when, PDO::PARAM_STR);
        $query->bindValue(':deals_where', $deals_where, PDO::PARAM_STR);
        $query->bindValue(':deals_price', $deals_price, PDO::PARAM_STR);
        $query->bindValue(':deals_map', $deals_map, PDO::PARAM_STR);
        $query->bindValue(':deals_metro',$deals_metro , PDO::PARAM_INT);
        $query->bindValue(':deals_info', $deals_info, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_id_TAG_ARR', $tag_arr_id_TAG_ARR, PDO::PARAM_STR);
        $query->bindValue(':users_id_USERS', $users_id_USERS , PDO::PARAM_STR);

        $query->execute();

        return $pdo->lastInsertId(); 
    }

    public function getAllDeals(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from deals inner join tag_arr on tag_arr_id_TAG_ARR=tag_arr_id";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }
}