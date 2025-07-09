<?php
require_once 'db.php';

class Ville extends Database {
    private $table = "ville";
    private $id;
    private $idPays;

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

    public function create($name, $pays) {
        $query = "INSERT INTO $this->table (value, pays_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("si", $name, $pays);
        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function getVilleById() {
        $query = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $this->id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function getPays() {
        $query = "SELECT * FROM pays";
        $result = $this->db->query($query);
        if ($result && $result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        return [];
    }

    public function update($name,$pays) {
        $query = "UPDATE $this->table SET value = ?, pays_id = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sii", $name, $pays, $this->id);
        if (!$stmt->execute()) {
            return false; // Return false if the execution fails
        }
        return true;
    }

    public function deleteById() {
        $query = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }

    public function getVillePay (){
        $query = "SELECT ville.* , pays.value as pays_name FROM $this->table inner join pays on pays.id = ville.pays_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function createPays($paysName) {
        $query = "INSERT INTO pays (value) VALUES (?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("s", $paysName);
        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }

    public function getPaysById() {
        $query = "SELECT * FROM pays WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $this->idPays);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function updatePays($paysName) {
        $query = "UPDATE pays SET value = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("si", $paysName, $this->idPays);
        if (!$stmt->execute()) {
            return false;
        }
        return true;
    }
    public function deletePaysById() {
        $query = "DELETE FROM pays WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $this->idPays);
        return $stmt->execute();
    }
    public function setIdPays($idPays) {
        $this->idPays = $idPays;
    }
}
?>