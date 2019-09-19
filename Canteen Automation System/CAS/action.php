<?php
    require_once 'api/Connection.php';
    
     $connection = new Connection();
     $conn = $connection->getConnection();
    if(isset($_POST["addOrder"])){
        $fid = $_POST["fid"];

        $sql = "INSERT INTO `order`( `User_id`, `Food_id`) values(2, '$fid')";
        

        $run = $conn->prepare($sql);
        $run->execute();

        echo "Order Placed";
    }
?>