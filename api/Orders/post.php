<?php
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods,   Authorization,X-Requested-With');
  
    include_once '../../config/Database.php';
    include_once '../../models/Orders.php';

    // start db and connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate Shopping_cart object
    $Sc = new Orders($db);

    // get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $Sc->Order_Id = $data->Order_Id;
    $Sc->Customer_Id = $data->Customer_Id;
    $Sc->Final_cost = $data->Final_cost;


    if ($Sc->Post()){
      echo json_encode(array('message' => 'Order made'));
    }else {
      echo json_encode(array('message' => 'Order not made'));
    }

?>
