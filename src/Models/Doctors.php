<?php 
require_once 'person.php';

class Doctor extends Person {

    public int $departmentId ;

    public function __construct($firstName,$lastName,$email,$phone,$departmentId)
    {
        parent::__construct($firstName,$lastName,$email,$phone);
        $this->departmentId = $departmentId;
    }

    public function getDepartmentId(){ return $this->departmentId; }
    public function setDepartmentId($id){ $this->departmentId = $id; }

    public function save($pdo)
    {
        $stmt = $pdo->prepare(
            "INSERT INTO doctors (first_name,last_name,email,phone,department_id) VALUES (?,?,?,?,?)"
        );
        $stmt->execute([
            $this->getFirstName(),
            $this->getLastName(),
            $this->getEmail(),
            $this->getPhone(),
            $this->getDepartmentId()
        ]);
        echo "Doctor added!\n";
    }
    public function update(PDO $pdo, $id)
{
    $stmt = $pdo->prepare(
        "UPDATE doctors SET first_name = ?, last_name = ?, email = ?, phone = ?, department_id = ? WHERE id = ?"
    );

    $stmt->execute([
        $this->getFirstName(),
        $this->getLastName(),
        $this->getEmail(),
        $this->getPhone(),
        $this->getDepartmentId(),
        $id
    ]);

    echo "Doctor updated successfully!\n";
}

}
