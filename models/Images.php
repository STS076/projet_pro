<?php

class Images extends Database {
    private $_images_id; 
    private $_images_name;  
    private $_deals_id_DEALS; 

    /**
     * Get the value of _images_id
     */ 
    public function get_images_id()
    {
        return $this->_images_id;
    }

    /**
     * Set the value of _images_id
     *
     * @return  self
     */ 
    public function set_images_id($_images_id)
    {
        $this->_images_id = $_images_id;

        return $this;
    }

    /**
     * Get the value of _images_name
     */ 
    public function get_images_name()
    {
        return $this->_images_name;
    }

    /**
     * Set the value of _images_name
     *
     * @return  self
     */ 
    public function set_images_name($_images_name)
    {
        $this->_images_name = $_images_name;

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
}