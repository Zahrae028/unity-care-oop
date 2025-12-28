<?php
require_once 'person.php';
class Patient extends Person
{
    public function save($pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO patients (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)");
        $stmt->execute([$this->getFirstName(), $this->getLastName(), $this->getEmail(), $this->getPhone()]);

        echo "Patient added successfully!\n";
    }

    public function update($pdo, $id)
    {
        $stmt = $pdo->prepare("UPDATE patients SET first_name=?, last_name=?, email=?, phone=? WHERE id=?");
        $stmt->execute([$this->getFirstName(), $this->getLastName(), $this->getEmail(), $this->getPhone(), $id]);

    }

}


;


?>