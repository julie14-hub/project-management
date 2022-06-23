<?php

 include'connect.php';

 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql= "delete from 'project' where id=$id";
    $result= mysqli_query($con, $sql);
     if($result){
        header("location:display.php");
     }else{
        die(mysqli_error($con));
     }


 }



      
   

if(isset($_GET ['deleteid'])){
  $id=$_GET['deleteid'];
  

   $sql= "delete from 'Project' where id=$id";
    $result= mysqli_query($con,$sql);

    if($result){
      header('location:display.php');
    }else
    {
      die(mysqli_error($con));
    }
}

?>

