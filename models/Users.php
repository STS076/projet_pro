<?php

// users est un enfant de Database 
class Users extends Database
{
    private int $_users_id;
    private string $_users_username;
    private string $_users_name;
    private string $_users_surname;
    private string $_users_mail;
    private string $_users_password;
    private int $_role_id_role;

    public function getUsersId()
    {
        return $this->_users_id;
    }
    public function setUsersId(int $id)
    {
        $this->_users_id = $id;
    }

    public function getUsersUsername()
    {
        return $this->_users_username;
    }
    public function setUsersUsername(string $username)
    {
        $this->_users_username = $username;
    }

    public function getUsersName()
    {
        return $this->_users_name;
    }
    public function setUsersName(string $name)
    {
        $this->_users_name = $name;
    }

    public function getUsersSurname()
    {
        return $this->_users_surname;
    }
    public function setUsersSurname(string $surname)
    {
        $this->_users_surname = $surname;
    }

    public function getUsersMail()
    {
        return $this->_users_mail;
    }
    public function setUsersMail(string $mail)
    {
        $this->_users_mail = $mail;
    }

    public function getUsersPassword()
    {
        return $this->_users_password;
    }
    public function setUsersPassword(string $password)
    {
        $this->_users_password = $password;
    }

    public function getRoleIdRole()
    {
        return $this->_role_id_role;
    }
    public function setRoleIdRole(int $roleId)
    {
        $this->_role_id_role = $roleId;
    }

    public function addUsers(string $username, string $name, string $surname, string $mail, string $password): void
    {
        $pdo = parent::connectDb();
        $sql = "INSERT INTO `users` (`users_username`, `users_name`, `users_surname`, `users_mail`, `users_password`, `role_id_ROLE`)
        VALUES (:username, :firstname, :surname, :mail, :password, :role) ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':surname', $surname, PDO::PARAM_STR);
        $query->bindValue(':firstname', $name, PDO::PARAM_STR);
        $query->bindValue(':username', $username, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':password', $password, PDO::PARAM_STR);
        $query->bindValue(':role', 3 ,PDO::PARAM_INT);

        $query->execute();
    }

    public function getAllUsers(): array
    {
        $pdo = parent::connectDb();
        $sql = "SELECT * FROM `users`";
        $query = $pdo->query($sql);
        // query exécute la requete , ne récupère aucune donnée. execute quand récupère les données et avec prepare. protège des injections sql. permet de ne pas mettre par ex des caractères html et sql 
        $result = $query->fetchall();
        return $result;
    }
}
