<?php
    require_once 'Db.php';
    class Domain extends Database {
        private $id;
        private $conn;
        private $table = "domaine";

        public function __construct() {
            $database = new Database();
            $this->conn = $database->connection();
        }
        public function getAllDomain() {
            $sql = $this->conn->query("SELECT * FROM domaine");

            if ($sql && $sql->num_rows > 0) {
                return $sql->fetch_all(MYSQLI_ASSOC);
            }

            return [];
        }
        public function setId($id) {
            $this->id = $id;
        }

        public function create($name, $description) {
            $query = "INSERT INTO $this->table (name,description) VALUES (?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ss", $name, $description);
            return $stmt->execute();
        }

        public function delete() {
        $query = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
        }

        public function getDomain() {
            $query = "SELECT * FROM $this->table WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("i", $this->id);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }
        public function update($name, $description) {
            $query = "UPDATE $this->table SET name = ?, description = ? WHERE id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bind_param("ssi", $name, $description, $this->id);
            return $stmt->execute();
        }
    }

?>