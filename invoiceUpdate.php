<?php

include 'connect.php';

if(isset($_GET['updateid'])){
$id=$_GET['updateid'];

$sql= "update from 'finance'";
$result= mysqli_query($con,$sql);

if($result){
    header('location:displayFinance.php');
}else{
    die(mysqli_error($con));
}

 

}







?>
<?php
include 'connect.php';
      
   

if(isset($_POST ['submit'])){
  $First_name=$_POST['First_name'];
     $Second_name=$_POST['Second_name'];
     $Email=$_POST['Email'];
     $Invoice_number=$_POST['Invoice number'];
     $Invoice_date=$_POST['Invoice date'];
     $Invoice_deadline=$_POST['Invoice deadline'];
     $Client_company=$_POST['Client company'];

   $sql= "update 'finance' set id='$id',Firstname='$first_name',Second name='$Second_name', Email='$Email',
   Invoice number='$Invoice_number', Invoice_date='$Invoice_date ', Invoice_deadline='$Invoice_deadline',
   Client_company='$Client_company; where id=$id";

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
        <label for="First name">First name</label>
        <input type="text" class="form-control" id="First name" >
    </div>
    <!--second name-->
     <div>
        <label for="Second name">Second name</label>
        <input type="text" class="form-control" id="Second name">
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
   
    <!--Invoice number-->
  <div>
      <label for="Invoice number">Invoice number</label>
      <input type="int" class="form-control" id="Invoice number">
  </div>
  <!--Invoice date-->
  <div>
  <label for="Invoice date">Invoice date</label>
  <input type="date" class="form-control" id="Invoice date">
  </div>
  <!--Invoice deadline-->
  <div>
  <label for="Invoice deadline">Invoice deadline</label>
  <input type="date" class="form-control" id="Invoice deadline">
  </div>
   <!--client company-->
   <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="Company">
  </div>
  
  
  <button type="submit" class="btn btn-primary">update</button>
</form>
    </div>
    
  </body>
</html>