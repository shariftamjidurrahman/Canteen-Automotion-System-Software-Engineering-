<?php

// include db connect class
require_once 'Connection.php';
class InsertDetails{
    function startInsertDetails(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $fname   = $_POST['fname'];
        $email   = $_POST['email'];
        $uname   = $_POST['uname'];
        $psw  = $_POST['psw'];
        try{
            //isset for int numbers they can be 0
            //!empty values can't be 0
            if(!empty($fname) && isset($email) && isset($uname) && isset($psw)){
                $sqlInsert = "INSERT INTO login (User_id, FullName, Email, Username, Password)
                VALUES (0, '$fname', '$email', '$uname', '$psw')";
                $conn->exec($sqlInsert);
                
            }
        }catch (PDOException $e){
            echo "Error while inserting ".$e->getMessage();
        }
        //cek is the row was inserted or not
        if($sqlInsert){
            //success inserted
            echo '<script type="text/javascript">alert("Successfully Registered !!!");</script>';
            //echo $sqlInsert;
            echo '<script type="text/javascript"> window.open("../../canteen.html","_self");</script>';
            die();
        }else{
            echo '<script type="text/javascript">alert("Error , Try Again!!!");</script>';
            //echo '<script type="text/javascript"> window.open("../pages/dashboard.php","_self");</script>';
            die();
        }
    }
}
    $insert = new InsertDetails();
    $insert->startInsertDetails();
