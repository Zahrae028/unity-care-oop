<?php


class Departments{

    private int $id ;
    private string $name ;

    private string $description;


    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    
    }
     public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getDescription() { return $this->description; }

     public function save(PDO $pdo)
    {
        $stmt = $pdo->prepare("INSERT INTO departments (name, description) VALUES (?, ?)");
        $stmt->execute([$this->getName(), $this->getDescription()]);

        echo "Department added successfully!\n";
    }

     public function update(PDO $pdo, $id)
    {
        $stmt = $pdo->prepare("UPDATE departments SET name=?, description=? WHERE id=?");
        $stmt->execute([$this->getName(), $this->getDescription(), $id]);

        echo "Department updated successfully!\n";
    }

}


?>