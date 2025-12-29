<?php
    function countDoc($pdo){
        $stmt = $pdo->query(
                                "SELECT d.name AS department_name, COUNT(doc.id) AS count
                                FROM departments d
                                LEFT JOIN doctors doc ON doc.department_id = d.id
                                GROUP BY d.id"
                            );
                            $counts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            echo "Doctor count by department:\n";
                            foreach ($counts as $c) {
                                echo "{$c['department_name']}: {$c['count']} doctors\n";
                            }
    }
?>