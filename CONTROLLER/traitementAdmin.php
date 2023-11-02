<?php 

require "../MODEL/dbConnection.php";
require "../MODEL/contact.php";




$result= Contact::listesContact($mysqlClient);
?>