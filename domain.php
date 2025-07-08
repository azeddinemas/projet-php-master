<?php
    require_once 'Db.php';
    class Domain extends Database {
        private $name;
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

   
    }

?>