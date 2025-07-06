<?php
require_once 'Db.php';

class Inscription extends Database {
    private $firstName;
    private $lastName;
    private $phone;
    private $email;
    private $company;
    private $paid;
    private $formation_id;
    private $table = "inscription";
    private $conn;

   public function __construct() {
        $database = new Database();
        $this->conn = $database->connection();
    }

   
    public function addInscription() {
        $query = "INSERT INTO $this->table 
            (id, firstName, lastName, phone, email, company, paid, formation_id)
            VALUES (null,?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        if (!$stmt) {
            die("Erreur de préparation : " . $this->conn->error);
        }

        $stmt->bind_param(
            "ssssssi",
            $this->firstName,
            $this->lastName,
            $this->phone,
            $this->email,
            $this->company,
            $this->paid,
            $this->formation_id
        );

        return $stmt->execute();
    }


    public function setFormationId($formationId) {
        $this->formation_id = $formationId;
    }
   
    public function setInscription($firstName, $lastName, $phone, $email, $company, $paid) {
        $this->firstName = htmlspecialchars($firstName);
        $this->lastName = htmlspecialchars($lastName);
        $this->phone = htmlspecialchars($phone);
        $this->email = htmlspecialchars($email);
        $this->company = htmlspecialchars($company);
        $this->paid = htmlspecialchars($paid);
    }

}   


?>