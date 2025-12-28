<?php

function searchDepartment(PDO $pdo)
{
    echo "Enter department name or description keyword: ";
    $search = trim(fgets(STDIN));

    $stmt = $pdo->prepare(
        "SELECT * FROM departments 
         WHERE name LIKE ? OR description LIKE ?"
    );
    $stmt->execute(["%$search%", "%$search%"]);

    $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($departments as $d) {
        echo "{$d['id']} | {$d['name']} | {$d['description']}\n";
    }
}
?>
