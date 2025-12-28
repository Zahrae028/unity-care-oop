<?php

function displayDoctors(PDO $pdo)
{
    $stmt = $pdo->query("SELECT * FROM doctors");
    $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($doctors as $d) {
        echo "{$d['first_name']} {$d['last_name']} | {$d['email']} | {$d['phone']} | Department ID: {$d['department_id']}\n";
    }
}
