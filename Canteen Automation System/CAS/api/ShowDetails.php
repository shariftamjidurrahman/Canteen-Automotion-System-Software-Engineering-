<?php
// include db connect class
require_once 'Connection.php';
class ShowDetails{
    function showShopList(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        
        $sql = "Select * from shop";
        
        $getJson = $conn->prepare($sql);
        $getJson->execute();
        
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
        
        if(count($result) > 0){
            foreach($result as $data){
                echo '
                    <div class="Food_name1 text-center">
                    <h1>.</h1>
                    <h1>.</h1>
                    
                        <img src="img/logo/KK.png" height="50">
                        <h2><span class="badge badge-secondary">'.$data["Name"].'</span></h2>
                    </div>


                    <div class="row text-center">
                        ';
                        
                        $show = new ShowDetails();
                        $show->showFood($data["Shop_id"]);

                        echo '
                    </div>
                ';
            }
        }
        
        
    }

    function showFood($shopId){
        $connection = new Connection();
        $conn = $connection->getConnection();

        $sql = "Select * from food where Shop_id = ".$shopId;
        
        $getJson = $conn->prepare($sql);
        $getJson->execute();
        
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
        
        if(count($result) > 0){
            foreach($result as $data){
                echo '


                    <div class="col-lg3 col-md-3 col-sm-6 col-xs-12">
                        <div class="foods">
                        <div class="inner-1">
                            <img class="card-img-top" src="img/food/f1.png">
                        </div>
                            <div class="card-body">
                                <h5>'.$data["Name"].'</h5>
                                <h5>'.$data["Price"].' Tk</h5>
                                <button id="Order" fid = "'.$data["Id"].'">Order Now</button>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }
    
}