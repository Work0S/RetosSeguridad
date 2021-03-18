<?php
  header("X-XSS-Protection: 0");

  $name = if (isset($GET['name'])) {
      return $GET['name'];
    } else {
      return "anonymous";
    }

  echo "Hello, $name!";
?>
