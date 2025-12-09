<?php
// header.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasta Travel & Tours - Car Rental</title>
<link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/lux/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
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
    .hero {
      background: url('car-hero.jpg') center/cover no-repeat;
      height: 400px;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-shadow: 2px 2px 6px black;
      position: relative;
      overflow: hidden;
    }

  .navbar-logo {
      max-height: 60px; 
      width: auto;     
    }
  .hero h1 {
    color: #fdfdfdff; 
    position: relative;
    overflow: hidden;
  }
    .hero h4 {
    font-size: 1.1rem;
    color: #fdfdfdff; 
    position: relative;
    overflow: hidden;

  }
  .hero::before {
        content: ""; 
        background: url('car-hero.jpg') center/cover no-repeat; 
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0; 
        filter: blur(5px); 
        transform: scale(1.05);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="logo.png" class="navbar-logo">  <!--logo-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content.php">Vehicle Listing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Book Vehicle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Settings</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="register.php">Register</a>
            <a class="dropdown-item" href="login.php">Login</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<div class="hero">
  <h1>Drive Your Dream Car Today!</h1>
  <p><h4 class="fs-6 text-center">We believe your rental car should enhance your trip, not just be a part of it. Our fleet delivers a premium driving experience that combines style, comfort, and reliability. </h4>

</div>
