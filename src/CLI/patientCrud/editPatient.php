<?php

require_once '../../Models/Patients.php';
function editPatient(PDO $pdo)
{
    echo "Enter the ID of the patient to edit: ";
    $id = trim(fgets(STDIN));

    echo "New First Name: ";
    $firstName = trim(fgets(STDIN));

    echo "New Last Name: ";
    $lastName = trim(fgets(STDIN));

    echo "New Email: ";
    $email = trim(fgets(STDIN));

    echo "New Phone: ";
    $phone = trim(fgets(STDIN));


    $patient = new Patient($firstName, $lastName, $email, $phone); 
    $patient->update($pdo, $id);

    echo "Patient updated successfully!\n";
}


?>