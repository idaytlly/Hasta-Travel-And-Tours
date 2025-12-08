<?php
// header.php (Assuming this setup is still being used for shared header content)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Hasta Travel & Tours</title>
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lux/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Custom styles for centering the login form */
    .login-container {
      margin-top: 50px;
    }
    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: #000000ff;
      color: white;
      text-align: center;
      padding: 10px 0;
    }
    /* Logo styling from previous request */
    .navbar-logo {
      max-height: 40px; 
      width: auto;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Hasta Travel & Tours Logo" class="navbar-logo"> 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Login
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container login-container">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7 col-sm-10">
      
      <div class="card border-primary mb-3">
        
        <div class="card-header">
          <h4 class="card-title text-center">User Login</h4>
        </div>
        
        <div class="card-body">
          <form action="handle_login.php" method="POST">
            
            <div class="form-group mb-3">
              <label for="inputEmail" class="form-label mt-2">Email address</label>
              <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <div class="form-group mb-4">
              <label for="inputPassword" class="form-label mt-2">Password</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
            </div>
            
            <div class="form-check mb-4">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember Me
              </label>
            </div>
            
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary btn-lg">Log In</button>
            </div>
            
            <div class="text-center mt-3">
              <a href="#" class="card-link">Forgot Password?</a>
              <span class="text-muted">|</span>
              <a href="#" class="card-link">Register New Account</a>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  &copy; 2025 Hasta Travel & Tours. All rights reserved.
</footer>

</body>
</html>