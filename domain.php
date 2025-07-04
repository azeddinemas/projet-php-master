<?php
    require_once 'Db.php';
    class Domain extends Database {
        private $name;
        private $url;
        private $id;

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

        public function getName() {
            $query = "SELECT * FROM domaine WHERE id = $this->id";
            $stmt = $this->conn->query($query);
            return $stmt->fetch();
        }

        public function getUrl() {
            return $this->url;
        }
    }

?>