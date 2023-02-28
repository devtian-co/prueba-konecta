<?php
   class Database {
      // Datos de conexión a la base de datos.
      private $host = "localhost";
      private $database = "konecta_app";
      private $user = "root";
      private $pass = "password";

      // Variable de conexión.
      public $conn;

      // Conexión a base de datos PDO.
      public function getConnection() {
         $this->conn = null;

         // Realizar conexión.
         try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->database, $this->user, $this->pass);
            $this->conn->exec("set names utf8");
         } catch(PDOException $exception) {
            echo "La conexión a la base de datos no se ha podido realizar: ".$exception->getMessage();
         }
         
         // Retornar conexión.
         return $this->conn; 
      }
   }