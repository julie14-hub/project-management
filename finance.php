<?php
 include ('connect.php');
 

 if(isset($_POST['submit'])){
     $first_name=$_POST['first_name'];
     $second_name=$_POST['second_name'];
     $email=$_POST['email'];
     $invoice_number=$_POST['invoice_number'];
     $invoice_amount=$_POST['invoice_amount'];
     $invoice_date=$_POST['invoice_date'];
     $invoice_deadline=$_POST['invoice_deadline'];
     $client_company=$_POST['client_company'];

     $sql= "insert into finance (first_name,second_name,email,invoice_number, invoice_amount,
      invoice_date,invoice_deadline,client_company)
     values('$first_name','$second_name', '$email','$invoice_number',$invoice_amount,'$invoice_date',
      '$invoice_deadline', '$client_company')";
     $result=mysqli_query($con,$sql);

     if($result){
        header("location:displayFinance.php");

     }else{
         die(mysqli_error($con));
     }



 }

 if(isset($_GET['delete'])){
  $id=$_GET['delete'];
   $mysqli->query("DELETE FROM finance where id=$id  ") or die($mysqli->error());

}




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
      
      <form method="post" action="finance.php" autocomplete="off">
    <!--first name-->
    <div>
        <label for="First name">First name</label>
        <input type="text" class="form-control" id="first_name"   name="first_name"  >
    </div>
    <!--second name-->
     <div>
        <label for="Second name">Second name</label>
        <input type="text" class="form-control" id="second_name"  name="second_name" >
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email"  >
    <div id="emailHelp" class="form-text"></div>
  </div>
   
    <!--Invoice number-->
  <div>
      <label for="Invoice number">Invoice number</label>
      <input type="int" class="form-control" id="invoice_number" name="invoice_number"  >
  </div>
    <!--Invoice amount-->
  <div>
      <label for="invoice_amount">Invoice amount</label>
      <input type="int" class="form-control" id="invoice_amount" name="invoice_amount"  >
  </div>
  <!--Invoice date-->
  <div>
  <label for="Invoice date">Invoice date</label>
  <input type="date" class="form-control" id="invoice_date"   name="invoice_date" >
  </div>
  <!--Invoice deadline-->
  <div>
  <label for="Invoice deadline">Invoice deadline</label>
  <input type="date" class="form-control" id="invoice_deadline" name="invoice_deadline"   >
  </div>
   <!--client company-->
   <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="client_company"   name="client_company"  >
  </div>
  
  
  <input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
    </div>
    
  </body>
</html>