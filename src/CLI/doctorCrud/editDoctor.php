<?php

require_once '../../Models/Doctor.php';

function editDoctor(PDO $pdo)
{
    echo "Enter the ID of the doctor to edit: ";
    $id = trim(fgets(STDIN));

    echo "New First Name: ";
    $firstName = trim(fgets(STDIN));

    echo "New Last Name: ";
    $lastName = trim(fgets(STDIN));

    echo "New Email: ";
    $email = trim(fgets(STDIN));

    echo "New Phone: ";
    $phone = trim(fgets(STDIN));

    echo "New Department ID: ";
    $departmentId = (int) trim(fgets(STDIN));

    $doctor = new Doctor($firstName, $lastName, $email, $phone, $departmentId);
    $doctor->update($pdo, $id);

    echo "Doctor updated successfully!\n";
}
