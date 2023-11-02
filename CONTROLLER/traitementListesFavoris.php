<?php 

require "../MODEL/dbConnection.php";
require "../MODEL/contact.php";



$result= Contact::listesFavoris($mysqlClient);
?>