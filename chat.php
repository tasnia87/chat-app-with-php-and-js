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
                <div class="card "> 
                    <div class="user"><header>
                    <?php
                    include_once "php/config.php";
                    $user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
                    $sql=mysqli_query($conn,"SELECT *FROM users WHERE unique_id={$user_id}");
                    if(mysqli_num_rows($sql)>0){
                        $row=mysqli_fetch_assoc($sql);
                    }
                    ?>
                        <div class="content"><a href="users.php"><i class="fa fa-arrow-left"></i></a><img src="php/images/<?php echo $row['img']?>" alt="">
                        <div class="details">
                        <span><?php echo $row['fname'] . " ". $row['lname']?></span>
                            <p><?php echo $row['status']?></p>
                        </div>
                        </div>
                        
                    </header>

                    <div class="chat-box">
                        <div class="chat outgoing">
                            <div class="details">
                                <p>This is outgoing message</p>

                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="download.jfif" alt="">
                            <div class="details">
                                <p>This is incoming message</p>

                            </div>
                        </div>

                        <div class="chat outgoing">
                            <div class="details">
                                <p>This is outgoing message</p>

                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="download.jfif" alt="">
                            <div class="details">
                                <p>This is incoming message</p>

                            </div>
                        </div>
                        <div class="chat outgoing">
                            <div class="details">
                                <p>This is outgoing message</p>

                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="download.jfif" alt="">
                            <div class="details">
                                <p>This is incoming message, Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quo magni laborum dicta placeat animi neque corporis vitae ipsa commodi fugit mollitia et vel, fuga eaque? Possimus necessitatibus at id?</p>

                            </div>
                        </div>
                        <div class="chat outgoing">
                            <div class="details">
                                <p>This is outgoing message</p>

                            </div>
                        </div>

                        <div class="chat incoming">
                            <img src="download.jfif" alt="">
                            <div class="details">
                                <p>This is incoming message</p>

                            </div>
                        </div>

                        

                        
                        
                        
                        
                    </div>
                    
                </div>
                
                
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" id="inputGroupFile02" placeholder="Type your message">
                    <label class="input-group-text" for="inputGroupFile02""><i class="fa fa-telegram"></i></label>
                  </div>
                
                
                
            </div>
            
        </div>
        
    </div> 
    
    
    
   
                        

                    
    
</body>
</html>