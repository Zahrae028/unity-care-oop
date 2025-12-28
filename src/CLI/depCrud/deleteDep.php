<?php
require_once '../../Models/Departments.php';

function deleteDepartment(PDO $pdo)
{
    echo "Enter the ID of the department to delete: ";
    $id = trim(fgets(STDIN));

    $stmt = $pdo->prepare("DELETE FROM departments WHERE id = ?");
    $stmt->execute([$id]);

    echo "Department deleted successfully!\n";
}
?>
