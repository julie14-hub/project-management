<?php

 include 'connect.php';



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CLIENTS</title>
  </head>
  <body>

  <div class="container">
      <button class="btn btn-primary my-5" >  <a href="client.php"  class="text-light" >  ADD CLIENT</a></button>  
  </div>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First name</th> 
      <th scope="col">Second name</th>
      <th scope="col">Email</th>
      <th scope="col">Client company</th>
      <th scope="col">Project name</th>
      <th scope="col">Start date</th>
      <th scope="col">Deadline</th>
      <th scope="col">translator</th>
      <th scope="col">Editor</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "select from 'project'";
    $result= mysqli_query($con, $sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$_POST['id'];
        $First_name=$_POST['First name'];
        $Second_name=$_POST['Second name'];
        $Email=$_POST['Email'];
        $Client_company=$_POST['Client company'];
        $Project_name=$_POST['Project name'];
        $Start_date=$_POST['Start date'];
        $Deadline=$_POST['Deadline'];
        $Translator=$_POST['Translator'];
        $Editor=$_POST['Editor']; 
        
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$First_name.'</td>
        <td>'.$Second_name.'</td>
        <td>'.$Email.'</td>
        <td>'.$Client_company.'</td>
        <td>'.$Project_name.'</td>
        <td>'.$Start_date.'</td>
        <td>'.$Deadline.'</td>
        <td>'.$Translator.'</td>
        <td>'.$Editor.'</td>

        <td>
      <button class="btn btn-primary" > <a href="update.php? updateid='.$id.'" class="text-light" > UPDATE  </a></button>
      <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'"> DELETE</a></button>
    </td>

      </tr> ';
      

      }
    }

    
    
    
    ?>
    
      

    
 