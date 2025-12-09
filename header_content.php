<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasta Travel & Tours - Login</title>
  
  <!-- Lux Bootswatch CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lux/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Full page background */
    body {
      background-image: url('car-hero.jpg'); /* Make sure the path is correct */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar-logo {
      max-height: 60px; 
      width: auto;     
    }

  </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" class="navbar-logo">  <!--logo-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLogin" aria-controls="navbarLogin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarLogin">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="vehicle_listing.php">Vehicle Listing</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Book Vehicle</a></li>
        <li class="nav-item"><a class="nav-link" href="#">History</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
