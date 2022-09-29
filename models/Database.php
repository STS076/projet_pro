<?php
class Database
{
    private string $_dbname = DBNAME;
    private string $_dbuser = DBUSER;
    private string $_dbpassword = DBPASSWORD;

    /**
     * Fonction permettant de se connecter à la base de données
     * @return PDO 
     */
    protected function connectDb()
    {
        try {
            $database = new PDO("mysql:host=localhost;dbname=" . $this->_dbname . ";charset=utf8", $this->_dbuser, $this->_dbpassword);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $database;
        } catch (Exception $errorMessage) {
            die('Erreur PDO : ' . $errorMessage->getMessage());
        }
    }
}
