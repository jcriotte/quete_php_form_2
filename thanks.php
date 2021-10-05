<?php

// define variables and set to empty values
$firstNameErr = $lastNameErr = $userEmailErr = $sujetErr = $userPhoneNumberErr = $userMessageErr = "";
$firstName = $lastName = $userEmail = $sujet = $userPhoneNumber = $userMessage = "";

//echo $_SERVER["REQUEST_METHOD"]; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    //echo "first name est vide";
    $firstNameErr = "First Name is required<br>";
    echo $firstNameErr;
    //$previous = $_SERVER['HTTP_REFERER'];
    //echo $previous;
  } else {
    $firstName = filter_var($_POST["first_name"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["last_name"])) {
    $lastNameErr = "Last Name is required<br>";
    echo $lastNameErr;
  } else {
    $lastName = filter_var($_POST["last_name"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }
  
  if (empty($_POST["sujet"])) {
    $sujetErr = "Sujet is required<br>";
    echo $sujetErr;
  } else {
    $sujet = filter_var($_POST["sujet"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["user_mail"])) {
    $userEmailErr = "Email is required<br>";
    echo $userEmailErr;
  } else {
    $userEmail = filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL);
  }

  if (empty($_POST["user_phone_number"])) {
    $userPhoneNumberErr = "Phone Number is required<br>";
    echo $userPhoneNumberErr;
  } else {
    $userPhoneNumber = filter_var($_POST["user_phone_number"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["user_message"])) {
    $userMessageErr = "Message is required<br>";
    echo $userMessageErr;
  } else {
    $userMessage = filter_var($_POST["user_message"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($firstNameErr)&&empty($lastNameErr)&&empty($sujetErr)&&empty($userEmailErr)&&empty($userPhoneNumberErr)&&empty($userMessageErr)) {
      echo "Merci ".$_POST['last_name']." ".$_POST['first_name']. 
      " de nous avoir contacté à propos de ". $_POST['sujet']. ".<br>";
      echo "Un de nos conseiller vous contactera soit à l’adresse ".$_POST['user_mail'].
      " ou par téléphone au ". $_POST['user_phone_number'].
      " dans les plus brefs délais pour traiter votre demande : <br>";
      echo $_POST['user_message'];
  }
}

?>