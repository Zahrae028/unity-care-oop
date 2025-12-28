<?php 
require_once '../../Models/Doctor.php';

function addDoctor(PDO $pdo)
{
    echo "Enter First Name: ";
    $firstName = trim(fgets(STDIN));

    echo "Enter Last Name: ";
    $lastName = trim(fgets(STDIN));

    echo "Enter Email: ";
    $email = trim(fgets(STDIN));

    echo "Enter Phone: ";
    $phone = trim(fgets(STDIN));

    echo "Enter Department ID: ";
    $departmentId = (int) trim(fgets(STDIN));

    $doctor = new Doctor($firstName, $lastName, $email, $phone, $departmentId);
    $doctor->save($pdo);

    echo "Doctor added successfully!\n";
}
