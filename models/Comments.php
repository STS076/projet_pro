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

    public function getAllComments(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * from comments  
        inner join deals on deals_id_DEALS=deals_id 
        inner join users on comments.users_id_USERS=users_id";
        $query = $pdo->query($sql);
        $result = $query->fetchall();
        return $result;
    }

    public function getCommentsByDeal($deals_id): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT comments_id, comments_rating, comments_comment, comments_date, comments_validate, deals_id_DEALS, comments.users_id_USERS , users_id, users_username, deals_id
        FROM comments 
        inner join deals on deals_id_DEALS=deals_id 
        inner join users on comments.users_id_USERS=users_id
        where deals_id=:deals_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':deals_id', $deals_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function approveComments($comments_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE comments set comments_validate=:comments_validate where comments_id=:comments_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':comments_validate', 1, PDO::PARAM_BOOL);
        $query->bindValue(':comments_id', $comments_id, PDO::PARAM_INPUT_OUTPUT);
        $query->execute();
    }

  
}
