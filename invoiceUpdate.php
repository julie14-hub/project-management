<?php
include 'connect.php';

  

if(isset($_PUT ['update'])){
  $id=$_PUT['id'];
  $first_name=$_PUT['first_name'];
  $second_name=$_PUT['second_name'];
  $email=$_PUT['email'];
  $invoice_number=$_PUT['invoice_number'];
  $invoice_amount=$_PUT['invoice_amount'];
  $invoice_date=$_PUT['invoice_date'];
  $invoice_deadline=$_PUT['invoice_deadline'];
  $client_company=$_PUT['client_company'];

  $sql= "update 'finance' set id='$id',first_name='$first_name',second_name='$second_name', email='$email',
  invoice_number='$invoice_number', invoice_amount='$invoice_amount', invoice_date='$invoice_date ', 
  invoice_deadline='$invoice_deadline',client_company='$client_company; where id=$id";
  $result=mysqli_query($con, $sql);

 if($result){
   header('location:display.php');
 }else
 {
   die(mysqli_error($con));
 }
}

if(isset($_GET['updateid'])){
  $id=$_GET['updateid'];
   

  $sql= "SELECT *FROM 'finance' WHERE 'updateid'= $id";
  $result= mysqli_query($con, $sql);


 if($result->num_row > 0){
  while($row=$result-> fetch_assoc())

     $first_name=$row['first_name'];
     $second_name=$row['second_name'];
     $email=$row['Email'];
     $invoice_number=$row['invoice_number'];
     $invoice_amount=$row['invoice_amount'];
     $Invoice_date=$row['invoice_date'];
     $invoice_deadline=$row['invoice_deadline'];
     $client_company=$row['client_company'];

 }}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FINANCE</title>
  </head>
  <body>
       <!--navigation bar-->
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="client.php">PROJECTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="finance.php">FINANCE</a>
  </li>
    <!--form-->
    <div class="container my-5">
      
      <form method="post">
    <!--first name-->
    <div>
        <label for="first_name">First name</label>
        <input type="text" class="form-control" id="first_name" name="first_name"
         >
    </div>
    <!--second name-->
     <div>
        <label for="second_name">Second name</label>
        <input type="text" class="form-control" id="second_name" name="second_name" 
         ?>
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text" name= "email" 
    
    ></div>
  </div>
   
    <!--Invoice number-->
  <div>
      <label for="invoice_number">Invoice number</label>
      <input type="int" class="form-control" id="invoice_number" name="invoice_number" 
      >
  </div>
    <!--Invoice amount-->
  <div>
      <label for="invoice_amount">Invoice amount</label>
      <input type="int" class="form-control" id="invoice_amount" name="invoice_amount" 
      >
  </div>
  <!--Invoice date-->
  <div>
  <label for="invoice_date">Invoice date</label>
  <input type="date" class="form-control" id="invoice_date" name="invoice_date"  
  >
  </div>
  <!--Invoice deadline-->
  <div>
  <label for="invoice_deadline">Invoice deadline</label>
  <input type="date" class="form-control" id="invoice_date" name= "invoice_date" 
  >
  </div>
   <!--client company-->
   <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="client_company" name="client_company" 
    >
  </div>
  
  
  
  <input class="btn btn-primary" type="submit" value="update" name="update">
</form>
    </div>
    
  </body>
</html>