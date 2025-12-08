<?php include 'header_login.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
  <div class="login-card col-md-4">

    <h3 class="text-center mb-4">Login</h3>

    <form method="post" action="loginprocess.php">

      <div class="mb-3">
        <label for="fid" class="form-label">User ID</label>
        <input type="text" class="form-control" id="fid" name="fid" placeholder="Enter your User ID" required>
      </div>

      <div class="mb-3">
        <label for="fpwd" class="form-label">Password</label>
        <input type="password" class="form-control" id="fpwd" name="fpwd" placeholder="Enter your password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>

    </form>

    <p class="text-center mt-3">
      Don't have an account? <a href="register.php" class="fw-bold">Register here</a>
    </p>

  </div>
</div>

<?php include 'footer.php'; ?>
