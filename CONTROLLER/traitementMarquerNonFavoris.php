<?php 
    require "../MODEL/dbConnection.php";
    require "../MODEL/contact.php";
   

    if(isset($_GET["id"]) && $_GET["id"]>0){
        $id=$_GET["id"];

        Contact::marquerNonFavoris($mysqlClient,$id);
        header("Location:/MVCGESTIONCONTACT/VIEW/listesFavoris.php");


    }
?>