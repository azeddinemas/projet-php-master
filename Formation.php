<?php
require_once 'Db.php';

class Formation {
    private $conn;
    private $table = "formations";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function getAll() {
        $sql = $this->conn->query("SELECT * FROM formations");

        if ($sql && $sql->num_rows > 0) {
            return $sql->fetch_all(MYSQLI_ASSOC);
        }

        return [];
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

    // public function getById($id) {
    //     $query = "SELECT * FROM $this->table WHERE id = :id";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute(['id' => $id]);
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }
}