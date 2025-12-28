<?php

function searchDoctor(PDO $pdo)
{
    echo "Enter first name or last name: ";
    $search = trim(fgets(STDIN));

    $stmt = $pdo->prepare(
        "SELECT * FROM doctors 
         WHERE first_name LIKE ? OR last_name LIKE ?"
    );
    $stmt->execute(["%$search%", "%$search%"]);

    $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($doctors as $d) {
        echo "{$d['first_name']} {$d['last_name']} | {$d['email']} | {$d['phone']} | Department ID: {$d['department_id']}\n";
    }
}
