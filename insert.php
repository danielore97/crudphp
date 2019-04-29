<?php

include 'db.php';

$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $user = $_POST['user'];
 $latitude = $_POST['latitude'];
 $longitude = $_POST['longitude'];

if (empty($user)){
        echo 'Try Again';
}else{
    $Sql_Query = "INSERT INTO `location`(`name`, `lat`, `lon`) values ('$user','$latitude','$longitude')";
    if(mysqli_query($con,$Sql_Query)){
        echo 'Data Inserted Successfully';
    }else{         
        echo 'Try Again';
    }
    mysqli_close($con);
    header('Location: index.php');
}
?>