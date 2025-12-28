<?php
require_once '../../Models/Departments.php';

function editDepartment(PDO $pdo)
{
    echo "Enter the ID of the department to edit: ";
    $id = trim(fgets(STDIN));

    echo "New Department Name: ";
    $name = trim(fgets(STDIN));

    echo "New Department Description: ";
    $description = trim(fgets(STDIN));

    $department = new Departments($name, $description);
    $department->update($pdo, $id);

    echo "Department updated successfully!\n";
}
?>
