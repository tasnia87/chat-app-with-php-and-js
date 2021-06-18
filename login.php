<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
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
                <div class="card c2"> 
                    <section class="login">
                    <h5 class="mt-3">Let's Chat </h5> 
                    <div class="row g-3">
                    
                            <form action="#" method="POST" class="row g-3" id="myform" enctype="multipart/form-data" autocomplete="off" ">
                            <div class="error" class="" id="alert" role="alert"></div>
                            <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required>
  </div>
                    
                    <div class="form button mb-3">
    <input type="submit" class="form-control btn btn-dark"  name="submit" value="LOGIN">
  </div>
                    
                    <div class="text-center mt-4"> <span>Don't have a account?</span> <a href="index.php" class="text-decoration-none">Sign Up</a> </div>
                    </form>   
                </div>
            </section>

            </div>
        </div>
    </div> 

    <<script src="javascript/login.js"></script>
</body>
</html>