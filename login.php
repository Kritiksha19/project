<?php
 session_start();
 include "database.php";

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password =$_POST['password'];

  $sql1 = "SELECT * FROM signup WHERE `email`='$email'";
  $result =  mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result) > 0){
    $fetch = mysqli_fetch_array($result);
  }

  $fetch_pass = $fetch['password'];
  $decode_pass = base64_decode($fetch_pass);
  if ($password == $decode_pass) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location: welcome.php');
} else {
  echo $password;
  echo $decode_pass;
    // header('location: login.php?error=1');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
.gradient-custom {
  background: gray ;
}   
</style>
<body>
<section class="gradient-custom">
<form action = "login.php" method="POST">
  <div class="container py-5 h-100vh">
    <div class="row d-flex justify-content-center align-items-center h-100vh">
      <div class="col-8 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-3 mt-md-2 pb-3">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please Enter your Email and Password!</p>
              <div class="form-outline form-white mb-8">
              <!-- <center>
                        <span id="message" style="color:brown"><?php if(isset($_GET['error']) && $_GET['error']==1){echo "Incorrect credentials!";} ?></span> <br><br>
                    </center> -->

                <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" class="form-label" for="email"><br>
              </div>
              <div class="form-outline form-white mb-8">
                <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" class="form-label" for="email"><br>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button>
              <div>
              <p class="mb-0">Already your are Login? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a></p>
              </div>
            </div>
         </div>
       </div>
     </div>
</div>
</div>
</form>
</section>
</body>
</html>