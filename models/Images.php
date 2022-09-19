<?php

class Images extends Database
{
    private $_images_id;
    private $_images_name;
    private $_deals_id_DEALS;

    public function get_images_id()
    {
        return $this->_images_id;
    }
    public function set_images_id($_images_id)
    {
        $this->_images_id = $_images_id;
    }

    public function get_images_name()
    {
        return $this->_images_name;
    }
    public function set_images_name($_images_name)
    {
        $this->_images_name = $_images_name;
    }

    public function get_deals_id_DEALS()
    {
        return $this->_deals_id_DEALS;
    }
    public function set_deals_id_DEALS($_deals_id_DEALS)
    {
        $this->_deals_id_DEALS = $_deals_id_DEALS;
    }


    public function addImage($images_name, $deals_id_DEALS)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `images` (`images_name`, deals_id_DEALS)
        VALUES (:images_name, :deals_id_DEALS) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':images_name', $images_name, PDO::PARAM_STR);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_STR);

        $query->execute();
    }

    public function getAllImagesByDeal($deals_id_DEALS): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from images where deals_id_DEALS=:deals_id_DEALS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function getOneGallery($deals_id_DEALS): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM `images` 
        inner join deals 
        on deals_id_DEALS=deals_id
        where deals_id_DEALS=:deals_id_DEALS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_STR);
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }
}
