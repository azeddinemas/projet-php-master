<?php
    require_once 'Db.php';

    class Formateur extends Database {
        private $table = "formateur";
        private $conn;
        private $id;

        public function __construct() {
            $database = new Database();
            $this->conn = $database->connection();
        }

        public function getAllFormateurs() {
            $sql = "SELECT * FROM $this->table";
            $result = $this->conn->query($sql);
            if ($result && $result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            }
            return [];
        }
        public function setId($id) {
            $this->id = $id;
        }
        public function delete() {
            $query = "DELETE FROM $this->table WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $this->id);
            return $stmt->execute();
        }
        
        public function create($firstName, $lastName, $description, $photo) {
            $query = "INSERT INTO $this->table (firstName, lastName, description, photo) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssss", $firstName, $lastName, $description, $photo);
            return $stmt->execute();
        }

        public function getFormateur() {
            $query = "SELECT * FROM $this->table WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function update($firstName, $lastName, $description) {
            $query = "UPDATE $this->table SET firstName = ?, lastName = ?, description = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("sssi", $firstName, $lastName, $description, $this->id);
            return $stmt->execute();
        }
    }
?>