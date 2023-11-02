<?php 
    class Contact{
        private $nom;
        private $prenom;
        private $telephone;

        public function __construct($nom,$prenom,$telephone){
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setTelephone($telephone);
        }

        public function setNom($nom){
            if (empty($nom) || !preg_match("/^[a-zA-Z]+$/", $nom)) {
                throw new Exception("Donner un nom correct svp");
            } else {
                $this->nom = $nom;
            }
        }
        public function setPrenom($prenom){
            if (empty($prenom) || !preg_match("/^[a-zA-Z]+$/", $prenom)) {
                throw new Exception("Donner un nom correct svp");
            } else {
                $this->prenom = $prenom;
            }
        }
        public function setTelephone($telephone){
            if (empty($telephone) || !preg_match("/^[0-9]+$/", $telephone) || substr($telephone, 0, 1) != 7 || strlen($telephone) != 9) {
                throw new Exception("Donner un numéro de téléphone correct");
            } else {
                $this->telephone = $telephone;
            }
        }


        public function ajouterContact(PDO $conn){
            $sql = 'INSERT INTO contact (nom, prenom, telephone) VALUES (:nom, :prenom, :telephone)';
            $statement = $conn->prepare($sql);
    
            $statement->execute([
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'telephone' => $this->telephone,
            ]);
             header("Location:../VIEW/admin.php");
           
        }

        public  static function listesContact(PDO $conn){
            $sql= "SELECT * FROM contact";
            $statement = $conn->prepare($sql);
            $statement->execute();
            $result= $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        }

        public static function modifier(PDO $conn, $identifiant, $nouveauNom, $nouveauPrenom, $nouveauTelephone){
            $sql = "UPDATE contact SET nom = :nom, prenom = :prenom, telephone = :telephone WHERE id = $identifiant";
            $statement = $conn->prepare($sql);
            $statement->execute([
                'nom' => $nouveauNom,
                'prenom' => $nouveauPrenom,
                'telephone' => $nouveauTelephone,
            ]);
            
        }

        public static function supprimer(PDO $conn, $identifiant){
            $sql= "DELETE FROM contact WHERE id=:identifiant";
            $statement= $conn->prepare($sql);
            $statement->execute([
                "identifiant"=> $identifiant
            ]);
            header("Location:../VIEW/admin.php");
        }

        public static function marquerFavoris(PDO $conn ,$identifiant){
            $sql= "UPDATE contact SET favoris='oui' WHERE id=:id";
            $statement= $conn->prepare($sql);
            $statement->execute([
                "id"=>$identifiant
            ]);
            header("Location:../VIEW/admin.php");
        }

        public static function listesFavoris(PDO $conn){
            $sql= "SELECT * FROM contact WHERE favoris='oui' ";
            $statement= $conn->prepare($sql);
            $statement->execute();

            $result= $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public static function marquerNonFavoris(PDO $conn ,$identifiant){
            $sql= "UPDATE contact SET favoris='non' WHERE id=:id";
            $statement= $conn->prepare($sql);
            $statement->execute([
                "id"=>$identifiant
            ]);
        }
        
    }

   