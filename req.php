<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Regester</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Regester</h2>
        <ul>
            <li><a href="index.html"><i class="fas fa-home"></i>Home</a></li>
            
            <li><a href="aboutus.php"><i class="fas fa-address-card"></i>About Us</a></li>
             <li><a href="login.php"><i class="fas fa-address-card"></i>Login</a></li>
              <li><a href="req.php"><i class="fas fa-address-card"></i>Regestration</a></li>
               <li><a href="contactus.php"><i class="fas fa-map-pin"></i>Contact Us</a></li>
            
        </ul> 
       
    </div>


    <div class="main_content">
        <div class="header">Welcome!! Regester.</div>  
        

        <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="login.php">Register</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
           
          </div>
        </div>
      </div>
    </div>

   

  </body>
</html>