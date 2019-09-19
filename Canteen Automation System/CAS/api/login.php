<?php
if(!isset($_SESSION))
{
    session_start();
}
// include db connect class
require_once 'Connection.php';
class InsertDetails{
    function startInsertDetails(){
        $connection = new Connection();
        $conn = $connection->getConnection();
        //array for json response
        $response = array();
        $uname   = $_POST['uname'];
        $psw   = $_POST['psw'];
            if(!empty($uname) && !empty($psw))
            {
                $sqlQuery = "SELECT * FROM login WHERE Username='$uname' AND Password='$psw'";
                $getJson = $conn->prepare($sqlQuery);
                $getJson->execute();
                $result = $getJson->fetchAll(PDO::FETCH_ASSOC);
                if(count($result) > 0) {
                    foreach($result as $data)
                    {
                        $_SESSION['User_id']=$data['User_id'];
                        $_SESSION['Username']=$data['Username'];
                        $_SESSION['Password']=$data['Password'];
                    }
                    $_SESSION['loggedIn']=true;
                    $_SESSION['admin']=false;
                    echo '<script type="text/javascript"> window.open("../index.php#foodorder","_self");</script>';            //  On Successful Login redirects to home.php
                    die();
                }
                else{
                    echo '<script type="text/javascript">alert("Authentication Error !!!");</script>';
                    echo '<script type="text/javascript"> window.open("../index.html","_self");</script>';
                    die();
                }
            }
            else{
                echo '<script type="text/javascript">alert("Please Fill Email And Password...");</script>';
                echo '<script type="text/javascript"> window.open("../index.html","_self");</script>';
                die();
            }
    }
}

    $insert = new InsertDetails();
    $insert->startInsertDetails();
