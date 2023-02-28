<?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Methods: POST");
   header("Access-Control-Max-Age: 3600");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   include_once "../../config/db.php";
   include_once "../../class/sale.php";

   $database = new Database();
   $db = $database->getConnection();
   $item = new Sale($db);
   $item->id = isset($_GET["id"]) ? $_GET["id"] : die();

   $item->getSingleSale();

   if($item->name != null){
      // Crear arreglo.
      $emp_arr = [
         "invoice" => $item->invoice,
         "i_id" => $item->i_id,
         "quantity" => $item->quantity,
         "p_state" => $item->p_state,
         "created_at" => $item->created_at
      ];

      http_response_code(200);

      echo json_encode($emp_arr);
   } else {
      http_response_code(404);
      
      echo json_encode("Venta no encontrada.");
   }