<?php 
require "../MODEL/dbConnection.php";
require "../MODEL/contact.php";


$ancienNom = $ancienPrenom = $ancienTelephone = '';

 if(isset($_GET["id"]) && $_GET["id"]>0){
    $id=$_GET["id"];

    $sql= "SELECT * FROM contact WHERE id=:id";
    $statement= $mysqlClient->prepare($sql);
    $statement->execute([
         "id"=>$id,
    ]);
    $res= $statement->fetch(PDO::FETCH_ASSOC);
     if ($res) {
         $ancienNom = $res["nom"];
         $ancienPrenom = $res["prenom"];
         $ancienTelephone = $res["telephone"];
     } else {
         echo "L'enregistrement n'a pas été trouvé.";
         exit;
     }
  }

  if (isset($_POST["modifier"])) {
     $nouveauNom = $_POST["nom"];
     $nouveauPrenom = $_POST["prenom"];
     $nouveauTelephone = $_POST["telephone"];
 
    
     Contact::modifier($mysqlClient, $id, $nouveauNom, $nouveauPrenom, $nouveauTelephone);

    header("Location: /MVCGESTIONCONTACT/VIEW/admin.php");

  }

?>