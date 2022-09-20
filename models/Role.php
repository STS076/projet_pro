<?php
class Role extends Database
{
    private $_role_id;
    private $_role_role;

    public function get_role_id()
    {
        return $this->_role_id;
    }
    public function set_role_id($_role_id)
    {
        $this->_role_id = $_role_id;

        return $this;
    }

    public function get_role_role()
    {
        return $this->_role_role;
    }
    public function set_role_role($_role_role)
    {
        $this->_role_role = $_role_role;

        return $this;
    }

    /**
     * permet de récupérer les roles
     */
    public function getAllRole(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `role`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }
}
