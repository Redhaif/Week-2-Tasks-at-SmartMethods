<?php

if(isset($_POST["submit"])){
    $arm1 = $_POST['arm1'];
    $arm2 = $_POST['arm2'];
    $arm3 = $_POST['arm3'];
    $arm4 = $_POST['arm4'];
    $arm5 = $_POST['arm5'];
    $arm6 = $_POST['arm6'];
    echo "Values has been saved sucsessully....";

     $db_name = "robotarm";
     $mysql_username = "redha";
     $mysql_password = "password";
     $server_name = "localhost"; 

    $connection = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
    
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into armcontrol(arm1, arm2, arm3, arm4, arm5, arm6)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiii", $arm1, $arm2, $arm3, $arm4, $arm5, $arm6);
        $stmt->execute();
        echo "Values has been saved sucsessully....";
        $stmt->close();
        $conn->close();
    }
}
?>