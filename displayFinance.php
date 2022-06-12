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

    <title>INVOICE</title>
  </head>
  <body>
    <div class="container">
        <button class="btn btn-primary" my-5 >  <a href="finance.php" class="text-light"> ENTER INVOICE DETAILS</a></button>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">First name</th>
      <th scope="col">Second name</th>
      <th scope="col">Email</th>
      <th scope="col">Invoice number</th>
      <th scope="col">Invoice date</th>
      <th scope="col">Invoice deadline</th>
      <th scope="col">Client company</th>

    </tr>
    

  </thead>
  <tbody>
      <?php
       
       $sql= "select from 'finance'";
       $result= mysqli_query($con,$sql);
       if($result){
         while($row=mysqli_fetch_assoc($result)){
          $NO=$_POST['NO'];
          $First_name=$_POST['First name'];
          $Second_name=$_POST['Second name'];
          $Email=$_POST['Email'];
          $Invoice_number=$_POST['Invoice number'];
          $Invoice_date=$_POST['invoice date'];
          $Invoice_deadline=$_POST['Invoice deadline'];
          $Client_company=$_POST['Client company'];
          
          
          echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$First_name.'</td>
          <td>'.$Second_name.'</td>
          <td>'.$Email.'</td>
          <td>'.$Invoice_number.'</td>
          <td>'.$Invoice_date.'</td>
          <td>'.$$Invoice_deadline.'</td>
          <td>'.$Client_company.'</td>
      
  
          <td>
          <button class="btn btn-primary" > <a href="update2.php? updateid='.$id.'" class="text-light" > UPDATE  </a></button>
          <button class="btn btn-danger"> <a href="delete2.php? deleteid= '.$id.' "> DELETE</a></button>
        </td>
          
  
        </tr> ';
         }
       }


      ?>
    
  </tbody>
</table>
    
  </body>
</html>