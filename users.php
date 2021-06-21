<?php
session_start();
 if(!isset($_SESSION['unique_id'])){ //_seesion remember the user information
     header("location: login.php");
 }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5"> 
                    <div class="user"><header>
                    <?php
                    include_once "php/config.php";
                    $sql=mysqli_query($conn,"SELECT *FROM users WHERE unique_id={$_SESSION['unique_id']}");
                    if(mysqli_num_rows($sql)>0){
                        $row=mysqli_fetch_assoc($sql);
                    }
                    ?>
                        <div class="content"><img src="php/images/<?php echo $row['img']?>" alt="">
                        <div class="">
                            <span><?php echo $row['fname'] . " ". $row['lname']?></span>
                            <p><?php echo $row['status']?></p>
                        </div>
                        </div>
                        <a href="logout.php"><div class="logout"><p>Logout</p></div></a>
                        
                    </header>
                    
                    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search people" aria-label="" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
</div>
                    


                    <div class="user-list"></div>

                    



                </div>
            </div>
        </div>
        
    </div> 

    <script src="javascript/users.js"></script>
</body>
</html>