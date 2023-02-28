<?php
   class Inventory {
      // Conexión.
      private $conn;

      // Tabla.
      private $table = "inventory";

      // Campos.
      public $id;
      public $name;
      public $reference;
      public $price;
      public $weight;
      public $category;
      public $stock;
      public $p_state;
      public $created_at;

      // Conexión a la base de datos.
      public function __construct($db) {
         $this->conn = $db;
      }

      // Listar registros.
      public function getInventory() {
         $query = "SELECT id, name, reference, price, weight, category, stock, p_state, created_at FROM ".$this->table;
         $stmt = $this->conn->prepare($query);
         
         $stmt->execute();
         
         return $stmt;
      }

      // Crear registro.
      public function createInventory() {
         $query = "INSERT INTO ".$this->table." SET
            name = :name,
            reference = :reference,
            price = :price,
            weight = :weight,
            category = :category,
            stock = :stock,
            p_state = 100,
            created_at = :created_at";

         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(":name", $this->name);
         $stmt->bindParam(":reference", $this->reference);
         $stmt->bindParam(":price", $this->price);
         $stmt->bindParam(":weight", $this->weight);
         $stmt->bindParam(":category", $this->category);
         $stmt->bindParam(":stock", $this->stock);
         $stmt->bindParam(":created_at", $this->created_at);

         if($stmt->execute()) {
            return true;
         }

         return false;
      }

      // Mostrar registro.
      public function getSingleInventory() {
         $query = "SELECT
               id, name, reference, price, weight, category, stock, p_state, created_at
            FROM ".$this->table." 
            WHERE
               id = ?
            LIMIT 0,1";

         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(1, $this->id);
         $stmt->execute();

         $data = $stmt->fetch(PDO::FETCH_ASSOC);

         $this->name =  $data["name"];
         $this->reference =  $data["reference"];
         $this->price =  $data["price"];
         $this->weight =  $data["weight"];
         $this->category =  $data["category"];
         $this->stock =  $data["stock"];
         $this->p_state =  $data["p_state"];
         $this->created_at =  $data["created_at"];
      }

      // Actualizar registro.
      public function updateInventory() {
         $query = "UPDATE ".$this->table." SET 
               name = :name,
               reference = :reference,
               price = :price,
               weight = :weight,
               category = :category,
               stock = :stock,
               p_state = 100,
               created_at = :created_at
            WHERE
               id = :id";
         
         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(":name", $this->name);
         $stmt->bindParam(":reference", $this->reference);
         $stmt->bindParam(":price", $this->price);
         $stmt->bindParam(":weight", $this->weight);
         $stmt->bindParam(":category", $this->category);
         $stmt->bindParam(":stock", $this->stock);
         $stmt->bindParam(":created_at", $this->created_at);
         $stmt->bindParam(":id", $this->id);

         if($stmt->execute()){
            return true;
         }
            
         return false;
      }

      // Eliminar registro.
      public function deleteInventory() {
         $query = "DELETE FROM ".$this->table." WHERE id = ?";
         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(1, $this->id);

         if($stmt->execute()) {
            return true;
         }

         return false;
      }
   }