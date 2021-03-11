<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS Vulnerability</title>
</head>
<body>

<p>Hello, 
<?php

  // Thanks DVWA
  header("X-XSS-Protection: 0");

  if (isset($GET['name'])) {
    echo $GET['name']
  } else {
    echo "anonymous"
  }
?>
!</p>

</body>
</html>
