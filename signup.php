<?php
include "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  if (isset($_POST['submit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $enc_password = base64_encode($password);

    $sql = "INSERT INTO signup (firstname,lastname,email,mobile,password) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$enc_passwordF')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "<script>";
      echo "alert('Submitted Successfully')";
      echo "</script>";
    } else {
      echo "<script>";
      echo "alert('Error Submitted is Failed')";
      echo "</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
  .gradient-custom {
    background: gray;
  }
</style>

<body>
  <script src="validation.js"></script>
  <section class="gradient-custom">
    <form action = "signup.php" method="POST" onsubmit="return validation()">
    <div class="container py-5 h-100%">
      <div class="row d-flex justify-content-center align-items-center h-100vh">
        <div class="col-6 col-md-6 col-lg-6 col-xl-6">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-3 mt-md-2 pb-3">

                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                <p class="text-white-50 mb-5">Please Enter your Details!</p>
                <p id="message"></p>

                <div class="form-outline form-white mb-8">
                <input type="fname " name="fname" id="fname" class="form-control form-control-lg" placeholder="Firstname" class="form-label" for="fname"><br>
                </div>

                <div class="form-outline form-white mb-8">
                  <input type="lname" name="lname" id="lname" class="form-control form-control-lg" placeholder="Lastname" class="form-label" for="lname"><br>
                </div>

                <div class="form-outline form-white mb-8">
                  <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" class="form-label" for="email"><br>
                </div>

                <div class="form-outline form-white mb-8">
                  <input type="mobile" name="mobile" id="mobile" class="form-control form-control-lg" placeholder="Mobile Number" class="form-label" for="mobile"><br>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" class="form-label" for="password">
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" name="cpassword" id="cpassword" class="form-control form-control-lg" placeholder="Confirm Password" class="form-label" for="cpassword">
                </div>
                <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Sign Up</button>
              </div>
              <div>
                <p class="mb-0">Already your are Sign Up? <a href="login.php" class="text-white-50 fw-bold">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>
  <script>
    function validation() {
    var pwd = document.getElementById("password").value;
    var cpwd = document.getElementById("cpassword").value;

    if (pwd != cpwd) {
        document.getElementById("message").innerHTML = "Password don't match";
        return false;
    } else if (pwd.length < 8) {
        document.getElementById("message").innerHTML = "Please enter atleast 8 digits password";
        return false;
    } else {
        return true;
    }
}
  </script>
</body>
</html>