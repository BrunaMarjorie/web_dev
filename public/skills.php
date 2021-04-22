<?php
   include('../private/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skills</title>
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
        <h1>Skills</h1>
        <?php
            include('../private/logout.php');
        ?>
    </div>

        <?php include "shared/mynav.php"; ?> 
    
    <!--Here, I mixed container, card-body and progress bar from the Bootstrap cheat sheet-->

    <div class="container-fluid" style="margin-top:5px">
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h3>Technical Skills</h3>
                        <br>
                        <p>MsProject</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        <br>
                        <p>SAP</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div> 
                        </div>
                        <br>
                        <p>AutoCad</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <p>Primavera</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
        
                    </div>
                  </div>
                
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h3>Soft Skills</h3>
                        <br>
                        <p>Team worker</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        <br>
                        <p>Work under pressure</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 90%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div> 
                        </div>
                        <br>
                        <p>Leadership</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 80%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        <p>Speech</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 5%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
        
                    </div>
                </div>
            </div>

            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h3>Languages</h3>
                        <br>
                        <p>Portuguese</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                        <br>
                        <p>English</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div> 
                        </div>
                        <br>
                        <p>Spanish</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 40%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                                
                    </div>
                </div>
                
            </div>   
            <div class="col-sm"></div>  
        </div>
    </div>
    <br>

        <?php include "shared/footer.php"; ?>
     
    </body>
</html>