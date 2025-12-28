<?php 
require_once '../../Models/Patients.php';
    function addPatient(PDO $pdo)
    {
        echo "Enter First Name: ";
        $firstName = trim(fgets(STDIN));

        echo "Enter Last Name: ";
        $lastName = trim(fgets(STDIN));

        echo "Enter Email: ";
        $email = trim(fgets(STDIN));

        echo "Enter Phone: ";
        $phone = trim(fgets(STDIN));

        $patient = new Patient($firstName , $lastName , $email , $phone);
        $patient->save($pdo);

        echo "Patient added successfully!\n";
    }

?>