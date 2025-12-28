<?php
require_once '../../Models/Doctors.php';

function deleteDoctors(PDO $pdo)
{
    echo "Enter the ID of the doctor to delete: ";
    $id = trim(fgets(STDIN));

    $stmt = $pdo->prepare("DELETE FROM doctors WHERE id = ?");
    $stmt->execute([$id]);

    echo "Doctor deleted successfully!\n";
}
?>
