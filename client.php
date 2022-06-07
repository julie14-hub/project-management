<?php
include 'connect.php';

if(isset($_POST ['submit'])){
  $First_name=$_POST['First name'];
  $Second_name=$_POST['Second name'];
  $Email=$_POST['Email'];
  $Client_company=$_POST['Client company'];
  $Project_name=$_POST['Project name'];
  $Start_date=$_POST['Start date'];
  $Deadline=$_POST['Deadline'];
  $Translator=$_POST['Translator'];
  $Editor=$_POST['Editor']; 

   $sql= "insert into 'Project' (First name, Second name, Email, Client company, Project name,Start date, Deadline, Translator,Editor )
   values('$First_name', '$Second_name', '$Email','$Client_company','$Project_name','$Start_date','$Deadline','$Translator','$Editor')";
    $result= mysqli_query($con,$sql);

    if($result){
      echo"data inserted successfully";
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

    <title>PROJECT MANAGEMENT</title>
  </head>
  <body>
    <!--navigation bar-->
    
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="">PROJECTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="">FINANCE</a>
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
    <!--client company-->
  <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="Company">
  </div>
    <!--project name-->
  <div>
      <label for="Project name">Project name</label>
      <input type="text" class="form-control" id="Project name">
  </div>
  <!--start date-->
  <div>
  <label for="Start date">Start date</label>
  <input type="date" class="form-control" id="Start date">
  </div>
  <!--deadline-->
  <div>
  <label for="Deadline">Deadline</label>
  <input type="date" class="form-control" id="Deadline">
  </div>
  <!--translator-->
  <div>
  <label for="Translator">Translator</label>
  <input type="text" class="form-control" id="Translator">
</div>
  <!--Editor-->
  <div>
  <label for="Editor">Editor</label>
  <input type="text" class="form-control" id="Editor">
</div>  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

      
  </div>
  
    
  </body>
</html>

