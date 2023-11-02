<?php 

require "../CONTROLLER/traitementAdmin.php";

?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/all.min.css'>
</head>
<body>
        <div class="container">
            <h4 class="alert alert-danger text-center">Gestion Contact</h4>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="alert alert-info">Liste Des Contacts</h4>
                    <a href="listesFavoris.php" class="btn btn-dark">Liste Des Favoris</a>
                    <a href="ajouterContact.php" class="btn btn-danger">Ajouter Un Contact</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Telephone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php foreach($result as $value){ ?>
                        <tr>
                            
                            <td><?= $value["id"]?></td>
                            <td><?= $value["nom"]?></td>
                            <td><?= $value["prenom"]?></td>
                            <td><?= $value["telephone"]?></td>
                            <td>
                                <a href="../VIEW/modificationContact.php/?id=<?=$value["id"]?>" class="btn btn-success">Modifier</a>
                                <a href="../CONTROLLER/traitementSupprimer.php/?id=<?=$value["id"]?>" class="btn btn-danger">Supprimer</a> 
                                <?php if ($value["favoris"] !== 'oui') { ?>
                                <a href="../CONTROLLER/traitementMarquerFavoris.php/?id=<?=$value["id"]?>" class="btn btn-success">Marquer comme favoris</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>