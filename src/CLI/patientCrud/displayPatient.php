<?php


function displayPatient (PDO $pdo){
        $stmt = $pdo->query("SELECT * FROM patients");
        $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($patients as $p) {
        echo "{$p['first_name']} {$p['last_name']} | {$p['email']} | {$p['phone']}\n";

        }
}

?>