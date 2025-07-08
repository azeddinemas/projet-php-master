<?php
    require_once 'Db.php';

    class Formateur extends Database {
        private $table = "formateur";
        private $conn;

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
    }
?>