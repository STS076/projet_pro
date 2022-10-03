<?php

class Comments extends Database
{
    private $_comments_id;
    private $_comments_rating;
    private $_comments_comment;
    private $_comments_date;
    private $_comments_validate;
    private $_deals_id_DEALS;
    private $_users_id_USERS;

    public function get_comments_id()
    {
        return $this->_comments_id;
    }
    public function set_comments_id($_comments_id)
    {
        $this->_comments_id = $_comments_id;
    }

    public function get_comments_rating()
    {
        return $this->_comments_rating;
    }
    public function set_comments_rating($_comments_rating)
    {
        $this->_comments_rating = $_comments_rating;
    }

    public function get_comments_comment()
    {
        return $this->_comments_comment;
    }
    public function set_comments_comment($_comments_comment)
    {
        $this->_comments_comment = $_comments_comment;
    }

    public function get_comments_date()
    {
        return $this->_comments_date;
    }
    public function set_comments_date($_comments_date)
    {
        $this->_comments_date = $_comments_date;
    }

    public function get_comments_validate()
    {
        return $this->_comments_validate;
    }
    public function set_comments_validate($_comments_validate)
    {
        $this->_comments_validate = $_comments_validate;
    }

    public function get_deals_id_DEALS()
    {
        return $this->_deals_id_DEALS;
    }
    public function set_deals_id_DEALS($_deals_id_DEALS)
    {
        $this->_deals_id_DEALS = $_deals_id_DEALS;
    }

    public function get_users_id_USERS()
    {
        return $this->_users_id_USERS;
    }
    public function set_users_id_USERS($_users_id_USERS)
    {
        $this->_users_id_USERS = $_users_id_USERS;

        return $this;
    }


    /**
     * fonction permettant d'ajouter un commentaire
     */
    public function addComments($comments_rating, $comments_comment, $comments_date, $deals_id_DEALS, $users_id_USERS)
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `comments` (comments_rating, comments_comment, comments_date, deals_id_DEALS, users_id_USERS)
        VALUES (:comments_rating, :comments_comment, :comments_date, :deals_id_DEALS, :users_id_USERS) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':comments_rating', $comments_rating, PDO::PARAM_STR);
        $query->bindValue(':comments_comment', $comments_comment, PDO::PARAM_STR);
        $query->bindValue(':comments_date', $comments_date, PDO::PARAM_STR);
        $query->bindValue(':deals_id_DEALS', $deals_id_DEALS, PDO::PARAM_STR);
        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_STR);

        $query->execute();
    }


    /**
     * fonction permettant de récupérer tous les commentaires
     */
    public function getAllComments(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * 
        from comments  
        inner join deals 
        on deals_id_DEALS=deals_id 
        inner join users 
        on comments.users_id_USERS=users_id";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }


    /**
     * fonction permettant de récupérer tous les commentaires liés à un deal
     */
    public function getCommentsByDeal($deals_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT comments_id, comments_rating, comments_comment, comments_date, comments_validate, deals_id_DEALS, comments.users_id_USERS , users_id, users_username, deals_id
        FROM comments 
        inner join deals 
        on deals_id_DEALS=deals_id 
        inner join users 
        on comments.users_id_USERS=users_id
        where deals_id=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * fonction permettant d'approuver un commentaire en changeant son statut de validation
     */
    public function approveComments($comments_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE comments 
        set comments_validate=:comments_validate 
        where comments_id=:comments_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':comments_validate', 1, PDO::PARAM_INT);
        $query->bindValue(':comments_id', $comments_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * fonction permettant d'archiver un commentaire en changeant son statut de validation
     */
    public function archiveComment($comments_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE comments 
        set comments_validate=:comments_validate 
        where comments_id=:comments_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':comments_validate', 2, PDO::PARAM_INT);
        $query->bindValue(':comments_id', $comments_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**Fonction permettant de supprimer un commentaire 
     * 
     */
    public function deleteComments($comments_id)
    {
        $pdo = parent::connectDb();
        $sql = "DELETE from comments 
        where comments_id=:comments_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':comments_id', $comments_id, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * permet de récupérer le nombre de commentaires écrit par un utlisateur
     */
    public function getNumberofCommentsByUsers($users_id_USERS)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT count(users_id_USERS) 
        from comments 
        inner join users 
        on users_id=users_id_USERS 
        where users_id_USERS=:users_id_USERS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }


    /**
     * permet de récupérer les commentaires liés à un utilsiateur
     */
    public function getCommentsByUser($users_id_USERS)
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * 
        from comments 
        inner join users 
        on users_id=users_id_USERS 
        inner join deals 
        on deals_id=deals_id_DEALS
        where comments.users_id_USERS=:users_id_USERS";
        $query = $pdo->prepare($sql);
        $query->bindValue(':users_id_USERS', $users_id_USERS, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    /**
     * permet de récupérer tous les informations d'un commentaire
     */
    public function getOnecomment(int $comments_id)
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * 
        from comments 
        inner join deals 
        on deals_id_DEALS=deals_id 
        inner join users 
        on comments.users_id_USERS=users_id 
        where comments_id=:comments_id";
        
        $query = $pdo->prepare($sql);
        $query->bindValue(':comments_id', $comments_id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
        return $result;
    }

    
    /**
     * fonction pour compter le nombre de nouveaux commentaires
     */
    public function numberofNewComments():array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT count(comments_id) 
        from comments 
        inner join deals 
        on deals_id=deals_id_DEALS
        where comments_validate=0";

        $query = $pdo->query($sql);
        $result = $query->fetch();
        return $result;
    }
}
