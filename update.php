<?php
include 'connect.php';


 
 


 if(isset($_POST ['submit'])){
  $first_name=$_POST['first_name'];
  $second_name=$_POST['second_name'];
  $email=$_POST['email'];
  $client_company=$_POST['client_company'];
  $project_name=$_POST['project_name'];
  $start_date=$_POST['start_date'];
  $deadline=$_POST['deadline'];
  $translator=$_POST['translator'];
  $editor=$_POST['editor']; 

   $sql= "update 'finance' set id='$id',first_name='$first_name',second name='$second_name',
    email='$email',  client_company='$client_company,project_name='$project_name',
    start_date='$start_date ', deadline='$deadline', translator='$translator', editor='$editor'; 
    where id=$id";

    if($result){
      echo"updated sucessfully";
      
      //header('location:display.php');
    }else
    {
      die(mysqli_error($con));

    }
   

  }

  if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
     

    $sql= "SELECT *FROM 'project' WHERE 'updateid'= $id";
    $result= $mysql->query($con, $sql);


   if($result->num_row > 0){
    while($row=$result-> fetch_assoc()){

      $first_name=$_row['first_name'];
      $second_name=$_row['second_name'];
      $email=$_row['email'];
      $client_company=$_row['client_company'];
      $project_name=$_row['project_name'];
      $start_date=$_row['start_date'];
      $deadline=$_row['deadline'];
      $translator=$_row['translator'];
      $editor=$_row['editor'];

    }
   }    
  }













  
?>

<!doctype html>
<html lang="en">
  <head>
     <link rel="stylesheet" href="style.css">
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
    <a class="nav-link active" aria-current="page" href="client.php">PROJECTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="finance.php">FINANCE</a>
  </li>
   <!--form-->
  <div class="container my-5 "  >
      
      <form method="post" >
    <!--first name-->
    <div>
        <label for="First name">First name</label>
        <input type="text" class="form-control" id="first_name"  name="first_name" 
>    </div>
    <!--second name-->
     <div>
        <label for="second_name">Second name</label>
        <input type="text" class="form-control" id="second_name" name="second_name" 
        >
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email"  name="email"
     >
    <div id="emailHelp" class="form-text"></div>
  </div>
    <!--client company-->
  <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="client_company" name="client_company" 
    >
  </div>
    <!--project name-->
  <div>
      <label for="project_name">Project name</label>
      <input type="text" class="form-control" id="project_name" name="project_name"
       >
  </div>
  <!--start date-->
  <div>
  <label for="start_date">Start date</label>
  <input type="date" class="form-control" id="start_date" name="start_date"
   >
  </div>
  <!--deadline-->
  <div>
  <label for="Deadline">Deadline</label>
  <input type="date" class="form-control" id="deadline" name="deadline" 
  >
  </div>
  <!--translator-->
  <div>
  <label for="Translator">Translator</label>
  <input type="text" class="form-control" id="translator" name="translator" 
  >
</div>
  <!--Editor-->
  <div>
  <label for="editor">Editor</label>
  <input type="text" class="form-control" id="editor" name= "editor" 
  >
</div>  
      
      <button type="submit"  class="btn btn-primary"  >update</button>
</form>

      
  </div>
  
    
  </body>
</html>

