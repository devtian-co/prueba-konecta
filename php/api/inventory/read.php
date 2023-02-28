<?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");

   include_once "../../config/db.php";
   include_once "../../class/inventory.php";

   $database = new Database();
   $db = $database->getConnection();
   $items = new Inventory($db);
   $stmt = $items->getInventory();
   $itemCount = $stmt->rowCount();

   if($itemCount > 0) {
      $inventory_arr = [];
      $inventory_arr["body"] = [];
      $inventory_arr["itemCount"] = $itemCount;

      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         extract($row);
         
         $e = [
            "id" => $id,
            "name" => $name,
            "reference" => $reference,
            "price" => $price,
            "weight" => $weight,
            "category" => $category,
            "stock" => $stock,
            "p_state" => $p_state,
            "created_at" => $created_at
         ];
      
         array_push($inventory_arr["body"], $e);
      }
      echo json_encode($inventory_arr);
   } else {
      echo json_encode(
         ["message" => "No se han encontrado registros."]
      );
   }