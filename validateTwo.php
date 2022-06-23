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
if(empty ($_POST['invoice_number'])){
    $company_error= "please enter the invoice number";
}
if(empty ($_POST['invoice_amount'])){
    $amount_error= "please enter the invoice amount";
}
if(empty ($_POST['invoice_date'])){
    $date_error= "please enter the invoice date";
    }

if(empty ($_POST['invoice_deadline'])){
    $deadline_error= "please enter the invoice deadline";
}
if(empty ($_POST['client_company'])){
    $client_error= "please enter the client company";
}

    







?>