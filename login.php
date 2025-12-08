<?php
  include 'header_login.php';
?>

<div class="container flex-grow-1 d-flex justify-content-center align-items-start">
  <div class="col-md-6">
    <div class="login-card">
      <h3 class="text-center mb-4">Login</h3>
      <form method="post" action="loginprocess.php">
        <div class="mb-3">
          <label for="userID" class="form-label">Email</label>
          <input type="text" class="form-control" id="userID" name="fid" placeholder="Enter your Email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="fpwd" placeholder="Enter your password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
      </form>
      <p class="text-center mt-3">
        Don't have an account? <a href="register.php">Register here</a>
      </p>
    </div>
  </div>
</div>

<?php
  include 'footer.php';
?>
