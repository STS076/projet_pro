<?php
class Role extends Database
{
    private $_role_id;
    private $_role_role;

    /**
     * Get the value of _role_id
     */ 
    public function get_role_id()
    {
        return $this->_role_id;
    }

    /**
     * Set the value of _role_id
     *
     * @return  self
     */ 
    public function set_role_id($_role_id)
    {
        $this->_role_id = $_role_id;

        return $this;
    }

    /**
     * Get the value of _role_role
     */ 
    public function get_role_role()
    {
        return $this->_role_role;
    }

    /**
     * Set the value of _role_role
     *
     * @return  self
     */ 
    public function set_role_role($_role_role)
    {
        $this->_role_role = $_role_role;

        return $this;
    }
}
