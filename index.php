<?php
    $server="localhost";
    $user="root";
    $password="";

    $con = mysqli_connect($server, $user, $password);

    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    $name=$_POST['name'];
    $type=$_POST['type'];
    $category=$_POST['category'];
    $mrp=$_POST['mrp'];
    $best_price=$_POST['best_price'];
    $manufacturer=$_POST['manufacturer'];

    $sql="SELECT * FROM `medinfo` ORDER BY `medinfo`.`Name` ASC"
    echo $sql;

    if($con->query($sql)==true){
        echo "Successfully displayed";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
?>