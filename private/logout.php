<?php
     if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo '<p>Welcome to my Resume, ';
            echo ($_SESSION["username"]);
            echo ' -<a href="login/logout.php"><button class="btn btn-link">log out</button></a></p>';
      }else{      
            echo '<p>Have an account?<a href="login/login.php"><button class="btn btn-link">log in</button></a></p>';
      }
?> 

