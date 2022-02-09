<?php

require_once '../controllers/infoPatientController.php';


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <a href="https://icons8.com/icon/MS2XYm4irEPy/user"></a>

    <title>Informations Patients</title>
</head>

<body class="background text-white">

    <nav class=" navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="text-white btn btn-primary navbar-brand" href="home.php?results=home">Accueil</a>
            <a class="text-white btn btn-primary navbar-brand" href="addPatient.php?results=addPatient">Ajout d'un patient</a>
            <a class="text-white btn btn-primary navbar-brand" href="gestionPatient.php?results=gestionPatient">Gestion des patients</a>

        </div>
    </nav>

    <h1 class="text-center pt-5 mt-5">Informations patients</h1>

    <div class="text-white container col-6 mt-4">

        <?php
        // Nous mettons en place une condition pour s'assurer que nous avons selectionné un patient avec le bouton +d'info
        if (isset($patientInfo)) { ?>

            <div class="card text-dark">
                <h3 class="text-center  card-header">Information patient </h3>
                <div class="card-body">
                <form action="modifyPatient.php" method="POST">   
                    <div class="text-center">Nom</div>
                    <div class="text-center p-3"> <input type="text" value="<?= $patientInfo['lastname'] ?>" disabled="disabled" /> 
                    <div class="text-center">Prénom</div>
                    <div class="text-center p-3"><input type="text" value="<?= $patientInfo['firstname'] ?>" disabled="disabled" /></div>
                    <div class="text-center">Date de naissance</div>
                    <div class="text-center p-3"><input type="text" value="<?= $patientInfo['birthdate'] ?>" disabled="disabled" /></div>
                    <div class="text-center">Numéro de Tel</div>
                    <div class="text-center p-3"><input type="text" value="<?= $patientInfo['phone'] ?>" disabled="disabled" /></div>
                    <div class="text-center">E-Mail</div>
                    <div class="text-center p-3"><input type="text" value="<?= $patientInfo['mail'] ?>" disabled="disabled" /></div>
                                <button class="btn btn-primary btn-sm">Plus d'info</button>
                    <a class=" text-white btn btn-danger " href="home.php?results=home">Retour</a>

                            </form>
                            
                </div>
            </div>

        <?php   } else { ?>
            <p class="text-center">Veuillez selectionner un patient s'il vous plait</p>
            <a class="btn btn-secondary text-center" href="gestionPatient.php">Listes des patients</a>
        <?php   } ?>
       
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>