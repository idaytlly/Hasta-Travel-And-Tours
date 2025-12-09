<?php
include('dbconnect.php');

    // 1️⃣ Get form data
    $fname    = $_POST['fname'] ?? '';
    $fic      = $_POST['fic'] ?? '';
    $flicense = $_POST['flicense'] ?? '';
    $fphone   = $_POST['fphone'] ?? '';
    $femail   = $_POST['femail'] ?? '';
    $fpwd     = $_POST['fpwd'] ?? ''; // store plain text for now
    $utype    = 'CUSTOMER'; // auto-assign user type

    // 2️⃣ Escape input to prevent SQL injection
    $fname    = mysqli_real_escape_string($con, $fname);
    $fic      = mysqli_real_escape_string($con, $fic);
    $flicense = mysqli_real_escape_string($con, $flicense);
    $fphone   = mysqli_real_escape_string($con, $fphone);
    $femail   = mysqli_real_escape_string($con, $femail);
    $fpwd     = mysqli_real_escape_string($con, $fpwd);

    // 3️⃣ Optional: check if user already exists by IC or email
    $checkSQL = "SELECT * FROM users WHERE ic='$fic' OR email='$femail'";
    $checkResult = mysqli_query($con, $checkSQL);

    if (!$checkResult) {
        die("Error checking existing user: " . mysqli_error($con));
    }

    if (mysqli_num_rows($checkResult) > 0) {
        die("Error: User with this IC or Email already exists!");
    }

    // 4️⃣ Insert new user
    $sql = "INSERT INTO users (fullName, ic, driversLicense, phone, email, password, userType)
            VALUES ('$fname', '$fic', '$flicense', '$fphone', '$femail', '$fpwd', '$utype')";

    if (mysqli_query($con, $sql)) {
        echo "Registration successful!";
    } else {
        die("Error inserting user: " . mysqli_error($con));
    }

    // 5️⃣ Close connection
    mysqli_close($con);
?>
