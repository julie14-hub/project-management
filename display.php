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
      <th scope="col">Translator</th>
      <th scope="col">Editor</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "select *from project";
    $result= mysqli_query($con, $sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $first_name=$row['first_name'];
        $second_name=$row['second_name'];
        $email=$row['email'];
        $client_company=$row['client_company'];
        $project_name=$row['project_name'];
        $start_date=$row['start_date'];
        $deadline=$row['deadline'];
        $translator=$row['translator'];
        $editor=$row['editor']; 
        
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$first_name.'</td>
        <td>'.$second_name.'</td>
        <td>'.$email.'</td>
        <td>'.$client_company.'</td>
        <td>'.$project_name.'</td>
        <td>'.$start_date.'</td>
        <td>'.$deadline.'</td>
        <td>'.$translator.'</td>
        <td>'.$editor.'</td>

        <td>
      <button class="btn btn-primary" > <a href="update.php? updateid='.$id.'" class="text-light" > UPDATE  </a></button>
      <button class="btn btn-danger"> <a href="delete.php? deleteid='.$id.'"> DELETE</a></button>
    </td>

      </tr> ';
      

      }
    }

    
    
    
    ?>
    
      

    
 