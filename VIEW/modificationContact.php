<?php 
    require "../CONTROLLER/traitementModificationContact.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/all.min.css'> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-4 bg-white m-auto rounded-top">
                <h2 class="text-center"> Modification Du Contact </h2>
                <p class="text-center text-muted lead"> Simple et Rapide </p>

                <form action="#" method="post">
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" class="form-control" name="nom" placeholder="Nom " value="<?php echo $ancienNom; ?>" >
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-user">
                            </i> 
                        </span>
                        <input type="text" class="form-control" name="prenom" placeholder="Prénom " value="<?php echo $ancienPrenom; ?>">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text">
                            <i class="fa fa-phone">
                            </i>
                        </span>
                        <input type="text" class="form-control" name="telephone" placeholder="Numéro de telephone " value="<?php echo $ancienTelephone; ?>">
                    </div>
                        
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success" name="modifier">Modifier</button>
                   </div>

                </form>

            </div>
        </div>
    </div>
    
</body>
 <!-- <script src='js/bootstrap.js'></script>  -->
</html> 
