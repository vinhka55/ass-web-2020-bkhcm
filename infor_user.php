<?php
    include 'config.php';
    if($_GET["username"]){
        $username=$_GET["username"];
    }
    
    //echo $username;
    $sql="SELECT * FROM tai_khoan WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    //var_dump($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="width: 100%;" >
                <h1 style="text-align: center;">WELCOME <?php 
                echo $username ." your information";
                ?>
                </h1>
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body" style="text-align: center;">
                    <?php 
                        while ( $row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                            $id=$row['id'];
                            $username=$row['username'];
                            $kind=$row['loai'];
                           
                            echo "<p class='card-text'>"."ID: ".$id."</p>";
                            echo "<p class='card-text'>"."Username: ".$username."</p>";
                            echo "<p class='card-text'>"."Level : ".$kind."</p>";
                        }
                    ?>
                      
                      <a href="index.php" class="btn btn-primary">Comeback</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
</body>
</html>