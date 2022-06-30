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
      <th scope="col">Invoice amount</th>
      <th scope="col">Invoice date</th>
      <th scope="col">Invoice deadline</th>
      <th scope="col">Client company</th>

    </tr>
    

  </thead>
  <tbody>
      <?php
       
       $sql= "select *from finance";
       $result= mysqli_query($con,$sql);
       if($result){
         while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $first_name=$row['first_name'];
          $second_name=$row['second_name'];
          $email=$row['email'];
          $invoice_number=$row['invoice_number'];
          $invoice_amount=$row['invoice_amount'];
          $invoice_date=$row['invoice_date'];
          $invoice_deadline=$row['invoice_deadline'];
          $client_company=$row['client_company'];
          
          
          echo'<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$first_name.'</td>
          <td>'.$second_name.'</td>
          <td>'.$email.'</td>
          <td>'.$invoice_number.'</td>
          <td>'.$invoice_amount.'</td>
          <td>'.$invoice_date.'</td>
          <td>'.$invoice_deadline.'</td>
          <td>'.$client_company.'</td>
          
      
      
  
          <td>
          <button class="btn btn-primary" > <a href="invoiceUpdate.php? updateid='.$id.'" class="text-light" > UPDATE  </a></button>
          <button class="btn btn-danger"> <a href="invoiceDelete.php? deleteid= '.$id.' "> DELETE</a></button>
        </td>
          
  
        </tr> ';
         }
       }


      ?>
    
  </tbody>
</table>
    
  </body>
</html>