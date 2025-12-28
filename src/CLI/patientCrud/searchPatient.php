<?php


function searchPatient (PDO $pdo){
    echo "Enter first name or last name: ";
    $search = trim(fgets(STDIN));

    $stmt = $pdo->prepare("SELECT * FROM patients WHERE first_name LIKE ? OR last_name LIKE ?");
       $stmt->execute(["%$search%", "%$search%"]);
       
        $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($patients as $p) {
        echo "{$p['first_name']} {$p['last_name']} | {$p['email']} | {$p['phone']}\n";

        }
}

?>