<?php
 
    // Include connection file
    include('../private/session.php'); 

// Departments statment
   
    $sql_dept = "SELECT * FROM departments ORDER BY dept_no;";
    $result_dept = mysqli_query($connection, $sql_dept);
    $resultCheck = mysqli_num_rows($result_dept);
    // Close connection
    mysqli_close($connection);
?>    
        
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <h1>Database</h1>
        <?php
        include('../private/logout.php');
        ?>
    </div>

        <?php include "shared/mynav.php"; ?> 

    <div class="container" style="margin-top:30px">
        <div class="row">
        <div class="col-sm-4">
            <div id="flip_db" class="btn btn-primary btn-block btn-sm">Departments</div>
            <div id="panel_db">  

                <?php
          
                echo '<table>
                <tr>
                <th>Department Number</th>
                <th>Department Name</th>
                </tr>';

                if ($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result_dept)){
                echo('<tr><td>'.$row['dept_no'].'</td><td>'.$row['dept_name'].'</td></tr>');
                }
                }
    
                echo '</table>';
                ?> 
            </div>
        </div>
   
        <div class="col-sm-8">
            <form action="" method="POST" class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                <div class="input-group">
                    <input class="form-control form-control-sm ml-3 w-75" type="text" name="search" placeholder="Employee number...">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    <?php
                        // Search code
                        
                        // Include connection file
                        include '../private/db_connection.php';

                        if(isset($_POST['submit-search'])){
                        // Prepare a select statement
                        $search = mysqli_real_escape_string($connection, $_POST['search']);
                        $sql = "SELECT * FROM dept_emp WHERE emp_no LIKE '$search';";
                        $result = mysqli_query($connection, $sql);
                        $queryResult = mysqli_num_rows($result);
                        if ($queryResult > 0){
                            echo '<table>
                            <tr>
                            <th>Employee No.</th>
                            <th>Department No.</th>
                            <th>From</th>
                            <th>To</th>
                            </tr>';  
                            while($row = mysqli_fetch_assoc($result)){  
                                echo ('<tr><td>'.$row['emp_no'].'</td><td>'.$row['dept_no'].'</td><td>'.$row['from_date'].'</td><td>'.$row['to_date'].'</td></tr>');
                            }
                                echo '</table>';
                        }else {
                            echo '<table><tr><td>';
                            echo "There are no results matching your search";
                            echo '</td></td></table>';
                        }
                        }                                            
                        // Close connection
                        mysqli_close($connection);
                    ?> 
                </div>    
            </form>
        </div>
        </div>     
    </div>
           
    
    <?php include "shared/footer.php"; ?>
      
</body>
</html>