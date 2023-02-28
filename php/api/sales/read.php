<?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");

   include_once "../../config/db.php";
   include_once "../../class/sale.php";

   $database = new Database();
   $db = $database->getConnection();
   $items = new Sale($db);
   $stmt = $items->getSales();
   $itemCount = $stmt->rowCount();

   if($itemCount > 0) {
      $sales_arr = [];
      $sales_arr["body"] = [];
      $sales_arr["itemCount"] = $itemCount;

      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
         extract($row);
         
         $e = [
            "id" => $id,
            "invoice" => $invoice,
            "name" => $name,
            "quantity" => $quantity,
            "p_state" => $p_state,
            "created_at" => $created_at
         ];
      
         array_push($sales_arr["body"], $e);
      }
      echo json_encode($sales_arr);
   } else {
      echo json_encode(
         ["message" => "No se han encontrado registros."]
      );
   }