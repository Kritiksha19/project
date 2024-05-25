<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<section class="gradient-custom">
<form action = "form.php" method="POST">
  <div class="container py-5 h-100vh">
    <div class="row d-flex justify-content-center align-items-center h-100vh">
      <div class="col-8 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-3 mt-md-2 pb-3">
              <h2 class="fw-bold mb-2 text-uppercase">Registration</h2>
              <div class="form-outline form-white mb-8">
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