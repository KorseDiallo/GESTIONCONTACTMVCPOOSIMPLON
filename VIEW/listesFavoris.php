<?php 
    require "../CONTROLLER/traitementListesFavoris.php";

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
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="alert alert-info">Liste Des Favoris</h4>
                    <a href="../VIEW/admin.php" class="btn btn-dark">RETOUR SUR LA LISTE DES CONTACTS</a>
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
                        <?php foreach($result as $value){?>
                        <tr>
                            <td scope="row"><?= $value["id"]?></td>
                            <td><?= $value["nom"]?></td>
                            <td><?= $value["prenom"]?></td>
                            <td><?= $value["telephone"]?></td>
                            <td><a href="../CONTROLLER/traitementMarquerNonFavoris.php/?id=<?=$value["id"]?>" class="btn btn-success">Marquer Comme Non Favoris</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>