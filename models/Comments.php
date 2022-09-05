<?php

class Comments extends Database {
    private $_comments_id; 
    private $_comments_rating; 
    private $_comments_comment;  
    private $_comments_date; 
    private $_comments_validate; 
    private $_deals_id_DEALS; 
    private $_users_id_USERS;

    /**
     * Get the value of _comments_id
     */ 
    public function get_comments_id()
    {
        return $this->_comments_id;
    }

    /**
     * Set the value of _comments_id
     *
     * @return  self
     */ 
    public function set_comments_id($_comments_id)
    {
        $this->_comments_id = $_comments_id;

        return $this;
    }

    /**
     * Get the value of _comments_rating
     */ 
    public function get_comments_rating()
    {
        return $this->_comments_rating;
    }

    /**
     * Set the value of _comments_rating
     *
     * @return  self
     */ 
    public function set_comments_rating($_comments_rating)
    {
        $this->_comments_rating = $_comments_rating;

        return $this;
    }

    /**
     * Get the value of _comments_comment
     */ 
    public function get_comments_comment()
    {
        return $this->_comments_comment;
    }

    /**
     * Set the value of _comments_comment
     *
     * @return  self
     */ 
    public function set_comments_comment($_comments_comment)
    {
        $this->_comments_comment = $_comments_comment;

        return $this;
    }

    /**
     * Get the value of _comments_date
     */ 
    public function get_comments_date()
    {
        return $this->_comments_date;
    }

    /**
     * Set the value of _comments_date
     *
     * @return  self
     */ 
    public function set_comments_date($_comments_date)
    {
        $this->_comments_date = $_comments_date;

        return $this;
    }

    /**
     * Get the value of _comments_validate
     */ 
    public function get_comments_validate()
    {
        return $this->_comments_validate;
    }

    /**
     * Set the value of _comments_validate
     *
     * @return  self
     */ 
    public function set_comments_validate($_comments_validate)
    {
        $this->_comments_validate = $_comments_validate;

        return $this;
    }

    /**
     * Get the value of _deals_id_DEALS
     */ 
    public function get_deals_id_DEALS()
    {
        return $this->_deals_id_DEALS;
    }

    /**
     * Set the value of _deals_id_DEALS
     *
     * @return  self
     */ 
    public function set_deals_id_DEALS($_deals_id_DEALS)
    {
        $this->_deals_id_DEALS = $_deals_id_DEALS;

        return $this;
    }

    /**
     * Get the value of _users_id_USERS
     */ 
    public function get_users_id_USERS()
    {
        return $this->_users_id_USERS;
    }

    /**
     * Set the value of _users_id_USERS
     *
     * @return  self
     */ 
    public function set_users_id_USERS($_users_id_USERS)
    {
        $this->_users_id_USERS = $_users_id_USERS;

        return $this;
    }
}