<?php
  include 'header.php';
?>

<div class="container mt-5">
  <form method="POST" action="registerprocess.php">
    <fieldset>

       <div class="mb-3">
        <label for="email" class="form-label mt-4">Email Address</label>
        <input type="email" class="form-control" id="email" name="femail" placeholder="example@email.com" required>
        <small id="emailHelp" class="form-text text-muted">Enter your email</small>
      </div>
      
    <div class="row mb-3">
        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fullname" name="fname" placeholder="Enter your name" required>
        </div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label mt-4">Phone Number</label>
        <input type="text" class="form-control" id="phone" name="fphone" placeholder="Enter your phone number" autocomplete="off" required>
      </div>

    <p class="text mt-3">Upload Following Documents to Verify Your Information</p>

    <div class="row mb-3">
        <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fullname" name="fname" placeholder="Enter your name" required>
        </div>
    </div>

      <div class="mb-3">
        <label for="ic" class="form-label mt-4">National Identification Card</label>
        <input type="text" class="form-control" id="ic" name="fic" placeholder="Enter your 12-digit IC" autocomplete="off" required>
      </div>

      <div class="mb-3">
        <label for="license" class="form-label mt-4">Driver's License</label>
        <input type="text" class="form-control" id="license" name="flicense" placeholder="Enter your driver's license number" autocomplete="off" required>
      </div>

    <button type="verify" class="btn btn-primary">Verify</button>

    <p class="text mt-3">Set Your Password</p>

    <div class="mb-3">
        <label for="password" class="form-label mt-4">Password</label>
        <input type="password" class="form-control" id="password" name="fpwd" placeholder="Enter your password" autocomplete="off" required>
      </div>

    <div class="mb-3">
        <label for="password" class="form-label mt-4">Enter Password Again</label>
        <input type="password" class="form-control" id="password" name="fpwd" placeholder="Enter your password" autocomplete="off" required>
      </div>
      </fieldset>
    <div>
      <button type="screate" class="btn btn-primary">Create Account</button>
      <button type="reset" class="btn btn-secondary">Clear Input</button>
    </div>
  </form>
</div>

<?php
  echo "<hr>";
  include 'footer.php';
?>
