<?php
  include 'header.php';
?>

<div class="container my-5">
    <form method="post" action="loginprocess.php">
  
    <fieldset>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-body">
          <h3 class="card-title text-center mb-4">Login</h3>

          <form method="post" action="loginprocess.php">
            <div class="mb-3">
              <label for="userID" class="form-label">User ID</label>
              <input type="text" class="form-control" id="userID" name="fid" placeholder="Enter your User ID" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="fpwd" placeholder="Enter your password" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

          <p class="text-center mt-3">
            Don't have an account? <a href="register.php">Register here</a>
          </p>

        </div>
      </div>
    </div>
  </div>
</fieldset>
</div>

<?php
  include 'footer.php';
?>
