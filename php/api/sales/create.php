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
   $data = json_decode(file_get_contents("php://input"));

   $item->invoice = $data->invoice;
   $item->i_id = $data->i_id;
   $item->quantity = $data->quantity;
   $item->created_at = date("Y-m-d H:i:s");  

   if($item->createSale()){
      echo "Venta creada con éxito.";
   } else{
      echo "No se ha podido crear la venta.";
   }