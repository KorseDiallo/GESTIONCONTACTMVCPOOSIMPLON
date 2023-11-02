<?php 
   require "../MODEL/dbConnection.php";
   require "../MODEL/contact.php";

   


    if(isset($_GET["id"]) && $_GET["id"]>0){
        $id=$_GET["id"];

        Contact::marquerFavoris($mysqlClient,$id);
        header("Location: /MVCGESTIONCONTACT/VIEW/admin.php");

    }

    
   
?>