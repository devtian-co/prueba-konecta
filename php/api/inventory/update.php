<?php
   header("Access-Control-Allow-Origin: *");
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Methods: POST");
   header("Access-Control-Max-Age: 3600");
   header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

   include_once "../../config/db.php";
   include_once "../../class/inventory.php";

   $database = new Database();
   $db = $database->getConnection();
   $item = new Inventory($db);
   $data = json_decode(file_get_contents("php://input"));

   $item->id = $data->id;
   
   $item->name = $data->name;
   $item->reference = $data->reference;
   $item->price = $data->price;
   $item->weight = $data->weight;
   $item->category = $data->category;
   $item->stock = $data->stock;
   $item->created_at = date("Y-m-d H:i:s");  

   if($item->updateInventory()){
      echo json_encode("Producto actualizado con éxito.");
   } else{
      echo json_encode("No se ha podido actualizar el producto.");
   }