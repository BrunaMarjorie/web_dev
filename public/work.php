<?php
   include('../private/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Work Experience</title>
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
        <h1>Work Experience</h1>
        <?php
          include('../private/logout.php');
        ?>
    </div>

        <?php include "shared/mynav.php"; ?>

    <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4" style="background-color:whitesmoke"> 
            <h2>Deli Assistant</h2>
            <p><i>April 2018 to October 2019</i></p>
            <p>I am currently providing assistance on preparation and packaging of deli products; maintaining the store facility clean, neat and orderly; stocking and displaying products as per merchandising standards; keeping the store shelves loaded with product all the times; removing outdated and damaged products from shelves and storage areas.</p>
            <h2>Home Care</h2>
            <p><i>April 2018 to October 2019</i></p>
              <p>Experienced in assisting with getting in/out of bed; helping with bathing, toileting, dressing and grooming; managing medications; preparing and serving meals; keeping the environment neat and tidy.</p>
          </div>
          <div class="col-sm-8" style="background-color: whitesmoke;">
            <h2>Cost and Planning Engineer</h2>
              <p>Company: Construtora Celi Ltda.</p>
              <p><i>February 2008 to January 2017</i></p>
              <p>My background involves determining project costs by calculating labor, material, and related costs; preparing bids for tenders; ensuring projects run smoothly and structures are completed within budget and on time; maintain project data base by writing computer programs; ensuring proper timing of schedule production compatibility and credibility of schedules;  processing and tracking budget transfers and orders; tracking the delivery of all project-related materials; designing rough draft for the project model using AutoCAD software. </p>
            <br>
            <h2><i>Au Pair</i></h2>
            <p><i>August 2018 to November 2019</i></p>
            <p>I spent over a year living with an Irish family providing safe and secure environment for 4 children; performing childcare responsibilities according to the family's rules; maintaining household cleaning; preparing snacks and meals; collecting the kids from school; helping with homework.</p>
          </div>
        </div>
      </div>

      <?php include "shared/footer.php"; ?>
    
</body>
</html>
