<?php
require_once 'db.php';

class Ville extends Database {
    private $table = "ville";

    public function __construct() {
        $database = new Database();
        $this->db = $database->connection();
    }

    public function getAllVilles() {
        $query = "SELECT * FROM $this->table";
        $result = $this->db->query($query);
         if ($result && $result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return [];
    }

    // public function create($name) {
    //     $query = "INSERT INTO $this->table (name) VALUES (:name)";
    //     $params = [':name' => $name];
    //     return $this->db->execute($query, $params);
    // }

    // public function update($id, $name) {
    //     $query = "UPDATE villes SET name = :name WHERE id = :id";
    //     $params = [':name' => $name, ':id' => $id];
    //     return $this->db->execute($query, $params);
    // }

    // public function delete($id) {
    //     $query = "DELETE FROM villes WHERE id = :id";
    //     $params = [':id' => $id];
    //     return $this->db->execute($query, $params);
    // }
}
?>