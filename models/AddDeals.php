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


    /**fonction pour créer un deal  
     * 
     */
    public function addDeals(string $deals_title, $deals_mini_summary, $deals_summary,  string $deals_when, string $deals_where, string $deals_price, string $deals_map, string $deals_metro, string $deals_info, $deals_contact, INT $tag_arr_id_TAG_ARR, INT $users_id_USERS, $deals_created)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `deals` (`deals_title`, deals_mini_summary, deals_summary, `deals_when`, `deals_where`, `deals_price`, `deals_map`, `deals_metro`, `deals_info`, deals_contact,  `tag_arr_id_TAG_ARR`, `users_id_USERS`, deals_created)
        VALUES (:deals_title, :deals_mini_summary, :deals_summary, :deals_when, :deals_where, :deals_price, :deals_map, :deals_metro, :deals_info,:deals_contact, :tag_arr_id_TAG_ARR, :users_id_USERS, :deals_created) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':deals_title', $deals_title, PDO::PARAM_STR);
        $query->bindValue(':deals_mini_summary', $deals_mini_summary, PDO::PARAM_STR);
        $query->bindValue(':deals_summary', $deals_summary, PDO::PARAM_STR);
        $query->bindValue(':deals_when', $deals_when, PDO::PARAM_STR);
        $query->bindValue(':deals_where', $deals_where, PDO::PARAM_STR);
        $query->bindValue(':deals_price', $deals_price, PDO::PARAM_STR);
        $query->bindValue(':deals_map', $deals_map, PDO::PARAM_STR);
        $query->bindValue(':deals_metro', $deals_metro, PDO::PARAM_STR);
        $query->bindValue(':deals_info', $deals_info, PDO::PARAM_STR);
        $query->bindValue(':deals_contact', $deals_contact, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_id_TAG_ARR', $tag_arr_id_TAG_ARR, PDO::PARAM_INT);
        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_INT);
        $query->bindValue(':deals_created', $deals_created, PDO::PARAM_STR);

        $query->execute();

        return $pdo->lastInsertId();
    }

    /**
     * Fonction pour modifier un deal
     */
    public function amendDeals($deals_title, $deals_mini_summary, $deals_summary, $deals_when, $deals_where,  $deals_metro, $deals_price,  $deals_map, $deals_info, $deals_contact, $tag_arr_id_TAG_ARR, $users_id_USERS, $deals_id)
    {
        $pdo = parent::connectDb();

        $sql = "UPDATE deals 
        set deals_title =:deals_title, deals_mini_summary=:deals_mini_summary, deals_summary=:deals_summary, deals_when=:deals_when, deals_where=:deals_where, deals_metro=:deals_metro, deals_price=:deals_price, deals_info=:deals_info, deals_contact=:deals_contact,deals_map=:deals_map, tag_arr_id_TAG_ARR=:tag_arr_id_TAG_ARR, users_id_USERS=:users_id_USERS
        WHERE deals_id=:deals_id";

        $query = $pdo->prepare($sql);

        $query->bindValue(':deals_title', $deals_title, PDO::PARAM_STR);
        $query->bindValue(':deals_mini_summary', $deals_mini_summary, PDO::PARAM_STR);
        $query->bindValue(':deals_summary', $deals_summary, PDO::PARAM_STR);
        $query->bindValue(':deals_when', $deals_when, PDO::PARAM_STR);
        $query->bindValue(':deals_where', $deals_where, PDO::PARAM_STR);
        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_STR);
        $query->bindValue(':deals_price', $deals_price, PDO::PARAM_STR);
        $query->bindValue(':deals_metro', $deals_metro, PDO::PARAM_STR);
        $query->bindValue(':deals_info', $deals_info, PDO::PARAM_STR);
        $query->bindValue(':deals_contact', $deals_contact, PDO::PARAM_STR);
        $query->bindValue(':deals_map', $deals_map, PDO::PARAM_STR);
        $query->bindValue(':tag_arr_id_TAG_ARR', $tag_arr_id_TAG_ARR, PDO::PARAM_STR);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_STR);

        $query->execute();
    }

    /**
     * fonction pour aller chercher tous les deals
     */
    public function getAllDeals(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_title, deals_when, deals_where, deals_validate, deals_price, deals_metro, deals_map, deals_info, group_concat(`tag_categories_name`  SEPARATOR ', ') as DealsCatTag, tag_arr_name  from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        group by deals_id";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }

    /**
     * fonction pour aller chercher un seul deal, va le chercher par son ID
     */
    public function getOneDeal($deals_id)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_title, deals_summary, tag_arr_id_TAG_ARR, deals_mini_summary, deals_created, deals_contact, deals_validate, deals_mini_summary, users_username, deals_when, deals_where, deals_price, deals_metro, deals_map, deals_info, 
        group_concat(tag_categories_id_TAG_CATEGORIES SEPARATOR ', ') 
        as DealsCatTagId, tag_arr_id_TAG_ARR, group_concat(tag_categories_name SEPARATOR ', ') 
        as DealsCatTag, tag_arr_name  
        from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        inner join users 
        on users_id_USERS=users_id
        where deals_id=:deals_id
        group by deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    /**
     * fonction pour aller chercher tous les deals liés à un arrondissement 
     */
    public function getDealsbyArr($tag_arr_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_mini_summary, deals_summary, deals_title, deals_validate, deals_when, deals_where, deals_price, tag_arr_name, tag_arr_id_TAG_ARR, tag_arr_id ,deals_metro, deals_map, deals_info, group_concat(`tag_categories_name`  SEPARATOR ', ') as DealsCatTag from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        where tag_arr_id=:tag_arr_id
        group by deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_arr_id', $tag_arr_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * fonction pour aller chercher tous les deals liés à une catégorie
     */
    public function getDealsbyCat($tag_categories_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_mini_summary, deals_summary, deals_validate, deals_title, deals_when, deals_where, deals_price, tag_arr_name, tag_arr_id_TAG_ARR, tag_arr_id ,deals_metro, deals_map, deals_info, group_concat(`tag_categories_name`  SEPARATOR ', ') as DealsCatTag from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        where tag_categories_id=:tag_categories_id
        group by deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':tag_categories_id', $tag_categories_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }


    /**
     * fonction pour aller chercher les dix dernier deals ajoutés. 
     */
    public function lastTenDeals()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_mini_summary, deals_validate, deals_summary, deals_title, deals_when, deals_where, deals_price, tag_arr_name, tag_arr_id_TAG_ARR, tag_arr_id ,deals_metro, deals_map, deals_info, group_concat(`tag_categories_name`  SEPARATOR ', ') as DealsCatTag from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        where deals_validate=1
        group by deals_id
        ORDER BY deals_id 
        DESC LIMIT 4";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }

    /**
     * fonction permettant de changer le statut du deal, de le mettre en statut "validé"
     */
    public function changeDealValidationStatus($deals_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE deals 
        set deals_validate=:deals_validate 
        where deals_id=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_validate', 1, PDO::PARAM_INT);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * fonction pour changer le statut des deals et les archiver.
     */
    public function archiveDeals($deals_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE deals 
        set deals_validate=:deals_validate 
        where deals_id=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_validate', 2, PDO::PARAM_INT);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * Fonction pour faire la moyenne des notes données par les commnentaires et récupérer les 3 deals les mieux notés. 
     */
    public function getDealByAverageRating()
    {
        $pdo = parent::connectDb();
        $sql = "SELECT AverageRating, deals_id, deals_title, deals_mini_summary, deals_when, deals_where, deals_validate, deals_price, deals_metro, deals_map, deals_info, GROUP_CONCAT(`tag_categories_name`  SEPARATOR ', ') 
        AS DealsCatTag, tag_arr_name  
        FROM deals 
        INNER JOIN deals_has_cat 
        ON deals_id_DEALS=deals_id 
        INNER JOIN tag_categories 
        ON tag_categories_id_TAG_CATEGORIES=tag_categories_id
        INNER JOIN tag_arr 
        ON tag_arr_id_TAG_ARR=tag_arr_id
        left join 
        (
        SELECT avg(comments_rating) 
        as AverageRating, deals_id 
        as Average
        from deals 
        inner join comments 
        on comments.deals_id_DEALS=deals_id
        where deals_validate=1 
        and comments_validate=1
        group by deals_id
        ) 
        as HotDeals 
        on deals.deals_id=HotDeals.Average
        GROUP BY deals_id
        order by AverageRating desc 
        limit 4";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }

    /**
     * fonction pour effacer les deals
     */
    public function deleteDeals($deals_id)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE from deals 
        where deals_id=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * fonction pour récupérer le nombre de deals créés par un utilisateur.
     */
    public function getNumberofDealsByUser($users_id)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT count(deals_id) 
        from deals 
        inner join users 
        on users_id_USERS=users_id
        where users_id=:users_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':users_id', $users_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    /**
     * fonction pour afficher les deals pour chaque utilisateur
     */
    public function getDealsByUser($users_id)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT deals_id, deals_title, deals_summary, deals_mini_summary, deals_contact, deals_validate, deals_mini_summary, users_username, deals_when, deals_where, deals_price, deals_metro, deals_map, deals_info, 
        group_concat(tag_categories_id_TAG_CATEGORIES SEPARATOR ', ') 
        as DealsCatTagId, tag_arr_id_TAG_ARR, group_concat(tag_categories_name SEPARATOR ', ') 
        as DealsCatTag, tag_arr_name  
        from deals 
        inner join deals_has_cat 
        on deals_id_DEALS=deals_id 
        inner join tag_categories 
        on tag_categories_id_TAG_CATEGORIES=tag_categories_id
        inner join tag_arr 
        on tag_arr_id_TAG_ARR=tag_arr_id
        inner join users 
        on users_id_USERS=users_id
        where users_id=:users_id
        group by deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':users_id', $users_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * fonction permettant de changer l'id de l'user et de passer en anonyme. Utilisé avant d'effacer un utilisateur pour que les deals ne soient pas supprimés. 
     */
    public function changeDealsToAnonymous($users_id_USERS)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE deals 
        set users_id_USERS=18
        where users_id_USERS=:users_id_USERS";
        $query = $pdo->prepare($sql);

        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_INT);
        $query->execute();
    }
}
