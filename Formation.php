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
    
    public function getAllFormations() {
        $sql = $this->conn->query("SELECT formation.*, formateur.lastName , formateur.firstName , ville.value , domaine.name as domain_name FROM $this->table
        INNER JOIN formateur ON formateur_id = formateur.id
        INNER JOIN ville ON ville_id = ville.id
        INNER JOIN domaine ON domain_id = domaine.id");

        if ($sql && $sql->num_rows > 0) {
            return $sql->fetch_all(MYSQLI_ASSOC);
        }

        return [];
    }
    
    public function getById() {
        $query = "SELECT * FROM $this->table
        inner join formateur on formateur_id = formateur.id
        inner join ville on ville_id = ville.id 
        WHERE $this->table.id = $this->id";
        $stmt = $this->conn->query($query);
        return $stmt->fetch_assoc();
    }
    
    public function getFormation() {
        $query = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function create($name, $price, $mode, $ville_id, $formateur_id, $domain_id) {
        $query = "INSERT INTO $this->table (name, price, mode, ville_id, formateur_id, domain_id ) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssiii", $name, $price, $mode, $ville_id, $formateur_id, $domain_id);
        return $stmt->execute();
    }

    public function update($id, $name, $price, $mode, $ville_id, $formateur_id, $domain_id) {
        $query = "UPDATE $this->table SET name = ?, price = ?, mode = ?, ville_id = ?, formateur_id = ?, domain_id = ? WHERE id = ?";
         // Prepare the SQL statement
         // Bind the parameters
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssiiii", $name, $price, $mode, $ville_id, $formateur_id, $domain_id, $id);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }

    public function setId($id) {
        $this->id = $id;
    }

}