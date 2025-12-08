<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta-name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: url('car-hero.jpg') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .register-card {
      width: 420px;
      padding: 30px;
      border-radius: 12px;

      /* Glass floating effect */
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);

      box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.3);
      animation: floatUp 0.7s ease-out;
    }

    @keyframes floatUp {
      from { transform: translateY(30px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    .title-text {
      text-align: center;
      font-weight: 700;
      color: #fff;
      text-shadow: 0px 2px 4px rgba(0,0,0,0.5);
      margin-bottom: 15px;
    }

    label {
      font-weight: 500;
      color: #fff;
      text-shadow: 0px 1px 3px rgba(0,0,0,0.5);
    }
  </style>
</head>

<body>

<div class="register-card">
