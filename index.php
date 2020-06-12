<!DOCTYPE html>
<html>
<head>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="tailwind.css">
  <meta name="google-signin-client_id" content="90814260125-8gt4ata6e7aas5f3k6in167d3rg9kcqm.apps.googleusercontent.com">
  <title>Google Login</title>
  <script type="text/javascript">
  console.log('Script Working');
  function onSignIn(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
    console.log(id_token);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost/redirect.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
    console.log('Signed in as: ' + xhr.responseText);
    };
    xhr.send('idtoken=' + id_token);
    window.location.replace("https://google-login-php.herokuapp.com//redirect.php?idtoken="+id_token);
  }
  </script>
</head>
<body>
  <div class="container p-8 bg-indigo-400 mx-auto mt-8">
    <h3 class="text-white">This is a google login test</h3>
    <br>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </div>
</body>
</html>
