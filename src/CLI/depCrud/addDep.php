<?php 
require_once '../../Models/Departments.php';

function addDepartment(PDO $pdo)
{
    echo "Enter Department Name: ";
    $name = trim(fgets(STDIN));

    echo "Enter Department Description: ";
    $description = trim(fgets(STDIN));

    $department = new Departments($name, $description);
    $department->save($pdo);

    echo "Department added successfully!\n";
}
?>
