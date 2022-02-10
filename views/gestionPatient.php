<?php

require_once '../controllers/gestionPatientController.php';
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

    <title>Gestion Patients</title>
</head>

<body class="background">
    <div class="row d-flex justify-content-center">

        <div class="col-3">
            <a class="text-white btn btn-primary" href="home.php?results=home">Accueil</a>
            <a class="text-white btn btn-primary" href="addPatient.php?results=addPatient">Ajout d'un patient</a>
            <a class="text-white btn btn-primary" href="gestionPatient.php?results=gestionPatient">Gestion des patients</a>
            <a class="text-white btn btn-primary" href="gestionPatient.php?results=gestionPatient">Rendez-Vous</a>

            </div>

            <h1 class="text-center mt-5 ">Listes des patients</h1>
            <table class="col-10  table table-light">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Informations patient</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($gestionArray as $patient) { ?>
                        <tr>
                            <th scope="row"><?= $patient['lastname'] ?></th>
                            <td><?= $patient['firstname'] ?></td>
                            <td>
                                <form action="infoPatient.php" method="post">
                                    <!-- input de type hidden = input non visible coté FRONT 
                            il permet de recuperer une valeur à l'aide du Name-->

                                    <input type="hidden" name="idPatient" value="<?= $patient["id"] ?>">
                                    <button class="btn btn-primary btn-sm">Plus d'info</button>
                                </form>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <img src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/25/000000/external-delete-multimedia-kiranshastry-lineal-color-kiranshastry.png"/>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Supprimer fiche patient</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Attention, vous etes sur le point de supprimer une fiche patient
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annuler</button>
                                                <form class="container col-6" action="" method="POST">

                                                    <input type="hidden" name="deleteBtn" value="<?= $patient['id'] ?>">
                                                    <button type="submit" action="" class="btn btn-danger">Supprimer la fiche</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>