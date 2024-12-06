<?php
require_once "/home/chennaiangadi/php/Mail.php";
$from = "Sandra Sender <test@chennaiangadi.com>";
$to = "Ramona Recipient <test.milesweb@gmail.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "mail.chennaiangadi.com";
$port = "587";
$username = "test@chennaiangadi.com";
$password = "admin@123";

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>
