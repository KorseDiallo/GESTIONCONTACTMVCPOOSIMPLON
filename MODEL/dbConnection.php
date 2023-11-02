<?php 
class BaseDeDonnees {
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO('mysql:host=localhost;dbname=gestioncontact;charset=utf8', 'root', '');
            // echo "connexion reçue";
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getConnexion() {
        return $this->conn;
    }
}

$bdd = new BaseDeDonnees();
$mysqlClient = $bdd->getConnexion();