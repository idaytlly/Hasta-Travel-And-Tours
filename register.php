<?php
  include 'header_register.php';
?>
<br>
<br><br>
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
<br><br>
<br>
<?php
  include 'footer.php';
?>
