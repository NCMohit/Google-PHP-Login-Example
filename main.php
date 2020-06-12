<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="tailwind.css">
	<title>Google Login example</title>
</head>
<body>
<div class="container bg-indigo-400 text-white mx-auto mt-8 p-8">
<?php
session_start();
echo "Your email is :".$_SESSION['user'];
echo "<br>";
echo "Sub: ".$_SESSION['sub'];
?>
<br>
Sub will be used to store sessions and verify emails
</div>
</body>
</html>
