<?php

function displayDepartments(PDO $pdo)
{
    $stmt = $pdo->query("SELECT * FROM departments");
    $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($departments as $d) {
        echo "{$d['id']} | {$d['name']} | {$d['description']}\n";
    }
}
?>
