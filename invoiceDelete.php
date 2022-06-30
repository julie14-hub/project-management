<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from 'finance'";
    $result= mysqli_query($con, $sql);

    if($result){
        header('location:displayFinance.php');
    }else{
        die(mysqli_error($con));
    }
}



?>