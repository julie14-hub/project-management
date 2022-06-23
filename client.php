<?php
include 'connect.php';
include 'validate.php';
      


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

   $sql= "insert into project (first_name,second_name,email,client_company,project_name,start_date,deadline,translator,editor)
   values('$first_name', '$second_name', '$email','$client_company','$project_name','$start_date','$deadline','$translator','$editor')";
    $result= mysqli_query($con,$sql);

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
  <div class="container my-5  height:200px;"  >
      
      <form method="post" action="client.php" autocomplete="off" >
    <!--first name-->
    <div>
        <label for="First name">First name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" >
    </div>
    <!--second name-->
     <div>
        <label for="Second name">Second name</label>
        <input type="text" class="form-control" id="second_name" name="second_name">
    </div>
    <!--email-->
  <div class="mb-3">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
    <!--client company-->
  <div class="mb-3">
    <label for="Company" class="form-label">Client company</label>
    <input type="text" class="form-control" id="client_company" name="client_company">
  </div>  
    <!--project name-->
  <div>
      <label for="Project name">Project name</label>
      <input type="text" class="form-control" id="Project name" name="project_name" >
  </div>
  <!--start date-->
  <div>
  <label for="Start date">Start date</label>
  <input type="date" class="form-control" id="Start date" name="start_date">
  </div>
  <!--deadline-->
  <div>
  <label for="Deadline">Deadline</label>
  <input type="date" class="form-control" id="Deadline" name="deadline" >
  </div>
  <!--translator-->
  <div>
  <label for="Translator">Translator</label>
  <input type="text" class="form-control" id="Translator" name="translator" >
</div>
  <!--Editor-->
  <div>
  <label for="Editor">Editor</label>
  <input type="text" class="form-control" id="Editor" name="editor">
</div>  
  <input type="submit" name="submit" value="submit" class="btn btn-primary">
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>

      
  </div>
  
    
  </body>
</html>

