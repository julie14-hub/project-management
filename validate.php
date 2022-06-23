<?php 

if(empty ($_POST['first_name'])){
    $first_error= "please enter clients first name";
}
if(empty ($_POST['second_name'])){
    $second_error= "Please enter clients second name";
}
if(empty ($_POST['email'])){
    $email_error= "please enter clients email";
}
if(empty ($_POST['company_name'])){
    $company_error= "please enter the clients company";
}
if(empty ($_POST['project_name'])){
    $project_error= "please enter the project name";
}
if(empty ($_POST['start_date'])){
    $start_error= "please enter the start date";
}
if(empty ($_POST['deadline'])){
    $deadline_error= "please enter the deadline";
}
if(empty ($_POST['translator'])){
    $translator_error= "please enter the translator";
}
if(empty ($_POST['editor'])){
    $editor= "please enter the editor";
}
    





?>