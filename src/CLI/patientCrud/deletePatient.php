<?php
require_once '../../Models/Patients.php';

function deletePatient(PDO $pdo)
{
    echo "Enter the ID of the patient to delete: ";
    $id = trim(fgets(STDIN));

    $stmt = $pdo->prepare("DELETE FROM patients WHERE id = ?");
    $stmt->execute([$id]);

    echo "Patient deleted successfully!\n";
}
?>
