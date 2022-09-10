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

    public function getAllRole(): array
    {
        $pdo = parent::connectDb();

        $sql = "SELECT * FROM `role`";

        $query = $pdo->query($sql);

        return $query->fetchAll();
    }

    public function changeRoleUser($role_id, $users_id)
    {
        $pdo = parent::connectDb();
        $sql = "UPDATE `role`
        inner join users 
        on role_id=role_id_ROLE 
        set role_id=:role_id 
        where users_id=:users_id";
        $query = $pdo->prepare($sql);
        $query->bindValue(':role_id', $role_id, PDO::PARAM_INT);
        $query->bindValue(':users_id', $users_id, PDO::PARAM_INPUT_OUTPUT);
        $query->execute();
    }
}
