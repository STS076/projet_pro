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

    /**
     * permet d'ajouter des immages à un deal 
     */
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

    /**
     * récupère les images par deals
     */
    public function getAllImagesByDeal($deals_id_DEALS): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from images 
        where deals_id_DEALS=:deals_id_DEALS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * exactement la même fonction mais avec une jointure. 
     */
    public function getOneGallery($deals_id_DEALS): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM `images` 
        inner join deals 
        on deals_id_DEALS=deals_id
        where deals_id_DEALS=:deals_id_DEALS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }

    /**
     * supprime l'image
     */
    public function deleteImage($images_id)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE from images 
        where images_id=:images_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':images_id', $images_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * permet de récupérer les roles
     */
    public function getDealsWithImages(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `images` 
        inner join deals 
        on deals_id_DEALS=deals_id";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }
}
