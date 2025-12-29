<?php

function popDep($pdo){
    $stmt = $pdo->query(
                                "SELECT d.name, COUNT(doc.id) AS count
                                FROM departments d
                                LEFT JOIN doctors doc ON doc.department_id = d.id
                                GROUP BY d.id
                                ORDER BY count DESC
                                LIMIT 1"
                            );
                            $dept = $stmt->fetch(PDO::FETCH_ASSOC);
                            echo "Most populated department: {$dept['name']} with {$dept['count']} doctors\n";
}
?>