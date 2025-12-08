<?php
  include 'header_register.php';
?>

<h3 class="title-text">Create Your Account</h3>

<form method="post" action="registerprocess.php">

  <div class="mb-3">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fname" placeholder="Enter your full name" required>
  </div>

  <div class="mb-3">
    <label for="ic" class="form-label">National Identification Card</label>
    <input type="number" class="form-control" id="ic" name="fic" placeholder="Enter your IC" required>
  </div>

  <div class="mb-3">
    <label for="license" class="form-label">Driver's License</label>
    <input type="text" class="form-control" id="license" name="flicense" placeholder="Enter your license number" required>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="fphone" placeholder="012-3456789" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="femail" placeholder="Enter your email" required>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="fpwd" placeholder="Create a password" required>
  </div>

  <button type="submit" class="btn btn-light w-100 fw-bold">Register</button>

  <p class="text-center mt-3 text-white">
    Already have an account? <a href="login.php" class="text-warning">Login here</a>
  </p>

</form>

<?php
  include 'footer.php';
?>
