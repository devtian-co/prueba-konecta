<?php
   class Sale {
      // Conexión.
      private $conn;

      // Tabla.
      private $table = "sales";

      // Campos.
      public $id;
      public $invoice;
      public $i_id;
      public $quantity;
      public $p_state;
      public $created_at;

      // Conexión a la base de datos.
      public function __construct($db) {
         $this->conn = $db;
      }

      // Listar registros.
      public function getSales() {
         $query = "SELECT 
               s.id, invoice, inventory.name, quantity, s.p_state, s.created_at 
            FROM ".$this->table." AS s 
            INNER JOIN inventory ON s.i_id = inventory.id ";
         $stmt = $this->conn->prepare($query);

         $stmt->execute();

         return $stmt;
      }

      // Crear registro.
      public function createSale() {
         $query = "INSERT INTO ".$this->table." SET
            invoice = :invoice,
            i_id = :i_id,
            quantity = :quantity,
            p_state = 100,
            created_at = :created_at";

         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(":invoice", $this->invoice);
         $stmt->bindParam(":i_id", $this->i_id);
         $stmt->bindParam(":quantity", $this->quantity);
         $stmt->bindParam(":created_at", $this->created_at);

         if($stmt->execute()) {
            return true;
         }

         return false;
      }

      // Mostrar registro.
      public function getSingleSale() {
         $query = "SELECT
               id, invoice, i_id, quantity, p_state, created_at
            FROM ".$this->table." 
            WHERE
               id = ?
            LIMIT 0,1";

         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(1, $this->id);
         $stmt->execute();

         $data = $stmt->fetch(PDO::FETCH_ASSOC);

         $this->invoice =  $data["invoice"];
         $this->i_id =  $data["i_id"];
         $this->quantity =  $data["quantity"];
         $this->p_state =  $data["p_state"];
         $this->created_at =  $data["created_at"];
      }

      // Actualizar registro.
      public function updateSale() {
         $query = "UPDATE ".$this->table." SET 
               invoice = :invoice,
               i_id = :i_id,
               quantity = :quantity,
               created_at = :created_at
            WHERE
               id = :id";
         
         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(":invoice", $this->invoice);
         $stmt->bindParam(":i_id", $this->i_id);
         $stmt->bindParam(":quantity", $this->quantity);
         $stmt->bindParam(":created_at", $this->created_at);
         $stmt->bindParam(":id", $this->id);
      }

      // Eliminar registro.
      public function deleteSale() {
         $query = "DELETE FROM ".$this->table." WHERE id = ?";
         $stmt = $this->conn->prepare($query);

         $stmt->bindParam(1, $this->id);

         if($stmt->execute()) {
            return true;
         }

         return false;
      }
   }