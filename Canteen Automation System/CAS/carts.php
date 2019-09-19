<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAS CART</title>
    <link rel="icon" href="img/logo/icon.png">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body data-spy="scroll" data-target="#navbarResponsive">
<?php





?>



    
    <div class="carousel-item active" style="background-image: url(img/b/PIC-41.png);">
        <img src="img/logo/icon_02.png" height="60">
        <div class="head_line text-center">
                <h3><span class="badge-tx3 badge-warning"><b>FOOD CART<b></span></h3>

  
                    <table>
                        <tr>
                            <th>User ID</th>
                            <th>Food ID</th>
                            <th>Shop ID</th>
                            <th>Room No</th>
                            <th>Order Time</th>
                            <th>Delivery Time</th>
                            <th>Order Serial</th>
                        </tr>
                        
     
  
  
  <?php
                    
                    require_once 'api/Connection.php';


$connection = new Connection();
$conn = $connection->getConnection();

$sqlX= 'SELECT * from `order`';
//echo $sqlX;
$getJson = $conn->prepare($sqlX);
$getJson->execute();


        

  

  if ($result = $getJson->fetchAll(PDO::FETCH_ASSOC)) {
 

  foreach($result as $data)
  {
      
    $User_id = $data["User_id"];
    $Food_id = $data["Food_id"];
    $Shop_id = $data["Shop_id"];
    $Room_no = $data["Room_no"];
    $Order_time = $data["Order_time"];
    $Delivery_time = $data["Delivery_time"];
    $Order_serial = $data["Order_serial"];
   
                        
    echo '<tr> 
            <th>'.$User_id.'</th>
            <th>'.$Food_id.'</th>
            <th>'.$Shop_id.'</th>
            <th>'.$Room_no.'</th>
            <th>'.$Order_time.'</th> 
            <th>'.$Delivery_time.'</th> 
            <th>'.$Order_serial.'</th> 
        </tr>';
          
    
    }
    
}

                    
                    
                    
                    
                    
                    ?>




</table>




        </div>
    </div>

    <!--- Script Source Files -->
    <script type="text/javascript" src="js/particles.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <script src="js/custom.js"></script>
    <!--- End of Script Source Files -->

</body>

</html>

