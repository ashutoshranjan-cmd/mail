<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'ashutoshranjan@gmail.com';
$email_subject = "New form submission";
$email_body = "User Name : $name.\n". 
                "User Email : $visitor_email.\n". 
                "User Message : $message .\n";
$to = "kumarashu493@gmail.com";
$header = "From: $email_from\r\n";
$header .= "Reply-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>