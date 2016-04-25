<?php

session_start();

 if ( isset($_POST['Submit'])) {
     
$drink = $_SESSION['drink'];
$size = $_SESSION['size'];
$milk = $_SESSION['milk'];
$syrup = $_SESSION['syrup'];
$name = $_POST['FirstName'];
$time = $_POST['timeslot'] ;
$location = $_POST['CafeLocation'];
$visitor_email = $_POST['EmailAddress'];
$message = $_POST['additionalcomments'];
 }

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Invalid email value!";
    exit;
}

$email_from = 'Todd-T@email.ulster.ac.uk';//<== update the email address
$email_subject = "Drink Order";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message that was left:\n $message.\n".
    "To contact the customer please contact them on this email address:\n $visitor_email.\n".
    "Here is the time and location of the pick up from the cafe:\n $time $location.\n".
    "The size of the cup is:\n $size.\n". 
    "The milk tye is:\n $milk.\n". 
    "The syrup type is:\n $syrup.\n".
    "The drink type is:\n $drink.\n".
    
$to = "Todd-T@email.ulster.ac.uk" ;//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);

$to = "$visitor_email" ;//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);

//done. redirect to confirmation page.
header('Location: ../confirmation.php');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 