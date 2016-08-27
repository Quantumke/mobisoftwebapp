<?php
$url = 'https://api.sendgrid.com/';
$user = ''; // SG USERNAME
$pass = ''; // SG PASSWORD



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];




$params = array(
    'api_user'  => "$user",
    'api_key'   => "$pass",
    'to'        => "hello@mobisoft.co.ke",
    'subject'   => "New Contact",
    'html'      => "<html><head><title> Contact Form</title><body>
     Name: $name\n<br>
     Email: $email\n<br>
     message: $message\n<br>
     phone: $phone\n<br>
     <body></title></head></html>",
    'text'      => "
    Name: $name\n<br>
     Email: $email\n<br>
     Message: $message\n<br>
    $message",
    'from'      => "hello@mobisoft.co.ke",
  );



$request =  $url.'api/mail.send.json';

$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($session);
curl_close($session);



header("Location: contact.html");
exit();

// print everything out
print_r($response);

?>
