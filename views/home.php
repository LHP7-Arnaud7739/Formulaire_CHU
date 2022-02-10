<?php

require_once '../controllers/homeController.php';


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

    <title>CHU</title>
</head>

<body class="background text-center">

    < <div class="d-flex justify-content-center pt-2">

        <div class="card justify-content-center" style="width: 70rem;">
            <h1 class="card-title">Bienvenue dans MANU'S ANATOMY</h1>

            <img src="../assets/img/pexels-karolina-grabowska-4386478.jpg" class="card-img-top" alt="...">
            <div class="card-body">

                <p class="card-text">
                    <a class="text-white btn btn-success navbar-brand" href="addPatient.php?results=addPatient">Ajout d'un patient</a>
                    <a class="text-white btn btn-primary navbar-brand" href="gestionPatient.php?results=gestionPatient">Gestion des patients</a>
                    <a class="text-white btn btn-success navbar-brand" href="gestionPatient.php?results=gestionPatient">Rendez-Vous</a>

                </p>

            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>