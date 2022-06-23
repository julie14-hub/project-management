<?php
include 'connect.php';
      
   
$id=$_GET['updateid'];
$sql= "select from * 'finance' where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
    $first_name=$row['first_name'];
     $second_name=$row['second_name'];
     $email=$row['Email'];
     $invoice_number=$row['invoice_number'];
     $invoice_amount=$row['invoice_amount'];
     $Invoice_date=$row['invoice_date'];
     $invoice_deadline=$row['invoice_deadline'];
     $client_company=$row['client_company'];

if(isset($_POST ['submit'])){
     $first_name=$_POST['first_name'];
     $second_name=$_POST['second_name'];
     $email=$_POST['Email'];
     $invoice_number=$_POST['invoice_number'];
     $invoice_amount=$_POST['invoice_amount'];
     $invoice_date=$_POST['invoice_date'];
     $invoice_deadline=$_POST['invoice_deadline'];
     $client_company=$_POST['client_company'];

     $sql= "update 'finance' set id='$id',first_name='$first_name',second_name='$second_name', email='$email',
     invoice_number='$invoice_number', invoice_amount='$invoice_amount', invoice_date='$invoice_date ', 
     invoice_deadline='$invoice_deadline',client_company='$client_company; where id=$id";
  
    if($result){
      header('location:display.php');
    }else
    {
      die(mysqli_error($con));
    }
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
      
      <form method="post">
    <!--first name-->
    <div>
        <label for="first_name">First name</label>
        <input type="text" class="form-control" id="first_name" name="first_name"
         value=<?php echo $first_name?>>
    </div>
    <!--second name-->
     <div>
        <label for="second_name">Second name</label>
        <input type="text" class="form-control" id="second_name" name="second_name" 
        value=<?php echo $second_name?>>
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text" name= "email" 
    value=<?php echo $email?>
    ></div>
  </div>
   
    <!--Invoice number-->
  <div>
      <label for="invoice_number">Invoice number</label>
      <input type="int" class="form-control" id="invoice_number" name="invoice_number" 
      value=<?php echo $invoice_number?>>
  </div>
    <!--Invoice amount-->
  <div>
      <label for="invoice_amount">Invoice amount</label>
      <input type="int" class="form-control" id="invoice_amount" name="invoice_amount" 
      value=<?php echo $invoice_amount?>>
  </div>
  <!--Invoice date-->
  <div>
  <label for="invoice_date">Invoice date</label>
  <input type="date" class="form-control" id="invoice_date" name="invoice_date"  
   value=<?php echo $Invoice_date?>>
  </div>
  <!--Invoice deadline-->
  <div>
  <label for="invoice_deadline">Invoice deadline</label>
  <input type="date" class="form-control" id="invoice_date" name= "invoice_date" 
   value=<?php echo $invoice_deadline?>>
  </div>
   <!--client company-->
   <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="client_company" name="client_company" 
    value=<?php echo $client_company?>>
  </div>
  
  
  <input type="submit" name="update" value="submit" class="btn btn-primary" >
</form>
    </div>
    
  </body>
</html>