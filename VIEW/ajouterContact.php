<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inscription </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/all.min.css'>
   
</head>
<body class="bg-light">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top">
                <h2 class="text-center"> Ajouter Un Contact</h2>
                <p class="text-center text-muted lead"> Simple et Rapide </p>

                <form action="../CONTROLLER/traitementAjouterContact.php" method="post">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" class="form-control" placeholder="Nom" name="nom">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-phone">
                            </i>
                        </span>
                        <input type="text" class="form-control" placeholder="Numéro de telephone" name="telephone">
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" name="ajouter">Ajouter</button>
                        <!-- <input type="submit" class="btn btn-seuccess" name="ajouter" value="Ajouter"> -->
                    </div>
                </form>

            </div>
        </div>
    </div>
    
</body>
</html> 
<script src='js/bootstrap.js'></script>