<?php
  session_start();

?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bruna Santana CA3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/mycss.css">
  <script src="javascript/myjs.js"></script>
  <link rel="stylesheet" href="css/mycss.css">

</head>

<body>
  
  <div class="jumbotron text-center" style="margin-bottom:10px";>
    <h1>Bruna Santana</h1>
      <?php include('../private/logout.php'); ?>
  </div>

  
    <?php include "shared/mynav.php"; ?>

  <div class="container-fluid" style="margin-top:10px">
    <div class="row">
      <div class="col-sm-4" style="margin-top:40px">
        <img src="images/bruna santana.jpg" alt="Bruna Santana" width="300px">
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-8">

        <h3>about me</h3>
      
        <p>
        I am Bruna and I have been living in Ireland for over two years now. Even though I have never thought that I would move to this island and change my life completely, studying Science in Computing was a dream that I could realize here.
        By now, my work experience has absolutely changed: from working 9 (nine) years of my life as civil <br>
        engineer, to general occupations such as Au Pair, home care assistant and, currently, deli assistant.
        Welcome to my first adventure programming a website.</p>
        <br>
    
        <h3>how you would provide for backup/recovery and as close to 100% “uptime” as possible?</h3>
      
        <p>
        Cloud Server is the best way to host your website. Making use of different servers, you can achieve 
        nearly 100% uptime, saving some short time to maintenance. Online services also do automatic backups 
        in the background (frequency of website's owner choice), ensuring that every single file is backed up. 
        Disaster recovery plans (RPO or RTO) are also provided, without the necessity of many heavy machines 
        to store the data, and your system is protected under the security protocols.</p>              
        <br>
      </div>
    </div>
  </div>
    <?php include "shared/footer.php"; ?>
</body>
</html>