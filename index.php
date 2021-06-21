

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="card c1"> 
                    <section class="signup">
                    <h5 class="mt-3">Let's Chat </h5> 
                    <div class="row g-3">
                        
                        <div class="alert alert-danger" class="" id="alert" role="alert">
                                                   </div>
                            <form action="#" method="POST" class="row g-3" id="myform" enctype="multipart/form-data" autocomplete="off" ">
                            <div class="error" class="" id="alert" role="alert"></div>

                            <div class="col-md-6">
    <label for="name" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" required id="name">

  </div>

  <div class="col-md-6">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" required>
  </div>
  
                            <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" required>
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password" required>
  </div>
  <div class="input-group mb-3">
  <input type="file" class="form-control" name="img" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
<div class="form button mb-3">
    <input type="submit" class="form-control btn btn-dark"  name="submit" value="Continue to Chat">
  </div>


      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  
</form>
                    
                    </section>
                </div>
            </div>
        </div>
    </div> 

    <script src="javascript/signup.js"></script>
    
</body>
</html>