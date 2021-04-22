<?php
   include('../private/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Education</title>
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
       
</head>
  
<body>
  <div class="jumbotron text-center" style="margin-bottom:10px";>
    <h1>Education</h1>
    <?php
   include('../private/logout.php');
    ?>
  </div>

  <?php include "shared/mynav.php"; ?>
  
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-8" style="background-color:whitesmoke"> 
        <h2>Civil Engineer</h2>
              <img src="images/civil engineer.jpg" alt="Civil Engineer" width="240px"> 
            <p><i>March 2002 to February 2007</i></p>
             <p>Graduation at the <i>Universidade Federal de Sergipe</i>, Brazil.</p>
        <br>     
        <h2>Science in Computing</h2>
            <img src="images/computing.jpg" alt="Computing" width="240px">
          <p><i>February 2020 to present</i></p>
          <p>Higher Diploma at the <i>CCT College in Dublin</i>, Ireland.</p>
      </div>
      <div class="col-sm-4" style="background-color: whitesmoke;">
        <h2>Languages</h2>
            <img src="images/language.jpg" alt="Language" width="240px">
          <p><i>April 2016 to November 2019</i></p>
          <p>Studying English for a year in Brazil before heading to interchanges in England and Ireland.</p>
        <br>
      </div>
    </div>
  </div>
  
  
  <?php include "shared/footer.php"; ?>
      
</body>
</html>