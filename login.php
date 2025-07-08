<?php
require_once 'Db.php';

class Login extends Database {
    private $table = "login";
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connection();
    }

    public function login($email, $password) {
        $password = sha1($password);
        $sql = $this->conn->prepare("SELECT * FROM $this->table WHERE email = ? AND password = ?");
        $sql->bind_param("ss", $email, $password);
        $sql->execute();
        $result = $sql->get_result();
        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null; 
    }

    public function verifySession() {
        if (isset($_SESSION['email'])) {
            return $_SESSION['email'];
        } else {
            return null;
        }
    }

    public function logout() {
        unset($_SESSION['email']);
        setcookie('user', '', time() - 3600, "/");
        session_destroy();
        header('Location: index.php');
        exit();
    }
    
    public function getCount($table) {
        $query = "SELECT COUNT(*) as count FROM $table";
        $stmt = $this->conn->query($query);
        $result = $stmt->fetch_assoc();
        return $result['count'];
    }
}
?>