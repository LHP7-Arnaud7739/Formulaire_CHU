<?php

require_once '../config.php';
require_once '../models/DataBase.php';
require_once '../models/Patient.php';


// $onePatient = new Patients();
// $onePatientArray = $onePatient->getOnePatient();

if (isset($_POST["idPatient"])) {
    $id = htmlspecialchars(trim($_POST["idPatient"]));
    $patientObj = new Patients();
    $patientInfo = $patientObj->getOnePatient($id);

}


if (isset($_POST["modifyPatient"])) {
    $id = htmlspecialchars(trim($_POST["modifyPatient"]));
    $patientObj = new Patients();
    $patientModify = $patientObj->modifyPatient($id);

}