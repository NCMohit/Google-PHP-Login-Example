<?php
require_once 'src/Google/autoload.php';
session_start();
$id_token = $_GET['idtoken'];
$client = new Google_Client();  
$client->setClientId("90814260125-8gt4ata6e7aas5f3k6in167d3rg9kcqm.apps.googleusercontent.com");
$client->setClientSecret("NGIhQqspjfkX3-lO7xU7E70g");
$client->setRedirectUri("http://localhost/redirect.php");
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['email'];
  $_SESSION['sub'] = $payload['sub'];
  $_SESSION['user'] = $userid;
  header("Location: main.php");
} else {
  echo "Invalid Token";
}
?>
