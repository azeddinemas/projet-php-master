<?php

    class Database{

        public function connection(){
            $con = mysqli_connect("localhost","root","","gestion_formation");
            if (!$con) {
                die('Erreur de connexion : ' . mysqli_connect_error());
            }
            echo "Connexion réussie !";
            return $con;      
        }
        
    }

?>