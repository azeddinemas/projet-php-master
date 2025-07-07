<?php
require_once 'Db.php';

class Formation extends Database {
    private $table = "formation";
    private $conn;
    private $id;
    private $price;
    private $mode;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function getAll($id) {
        $sql = $this->conn->query("SELECT formation.*, formateur.lastName , formateur.firstName , ville.value  FROM $this->table
        INNER JOIN formateur ON formateur_id = formateur.id
        INNER JOIN ville ON ville_id = ville.id
        WHERE domain_id = $id;");

        if ($sql && $sql->num_rows > 0) {
            return $sql->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }
    
    public function getById() {
        $query = "SELECT * FROM $this->table  inner join formateur on formateur_id = formateur.id
        inner join ville on ville_id = ville.id WHERE $this->table.id = $this->id";
        $stmt = $this->conn->query($query);
        return $stmt->fetch_assoc();
    }
    
    // public function create($titre, $description) {
    //     $query = "INSERT INTO $this->table (titre, description) VALUES (:titre, :description)";
    //     $stmt = $this->conn->prepare($query);
    //     return $stmt->execute(['titre' => $titre, 'description' => $description]);
    // }

    // public function update($id, $titre, $description) {
    //     $query = "UPDATE $this->table SET titre = :titre, description = :description WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     return $stmt->execute(['titre' => $titre, 'description' => $description, 'id' => $id]);
    // }

    // public function delete($id) {
    //     $query = "DELETE FROM $this->table WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     return $stmt->execute(['id' => $id]);
    // }


    

    // public function login($email, $password) {
    //     $query = "SELECT * FROM login WHERE email = $email AND password = $password";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute(['email' => $email, 'password' => $password]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }
    //     public function login($email, $password) {
    //     $sql = $this->conn->prepare("SELECT * FROM $this->table WHERE email = ? AND password = ?");
    //     $sql->bind_param("ss", $email, $password);
    //     $sql->execute();
    //     $result = $sql->get_result();
    //     if ($result && $result->num_rows > 0) {
    //         return $result->fetch_assoc();
    //     }
    //     return [];
    // }

    public function setId($id) {
        $this->id = $id;
    }

}