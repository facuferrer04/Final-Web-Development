<?php

  require 'database.php';

 if(isset($_POST["submit"])) {
    if(empty($username)) {
        echo "<p class='error'>* Add your username </p>";
    }
 }

 ?>