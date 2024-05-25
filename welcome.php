<?php
session_start();
require_once "database.php";
$email = $_SESSION['email'];

$sql1 = "SELECT * FROM signup WHERE `email`='$email'";
$result =  mysqli_query($conn, $sql1);
$fetch = mysqli_fetch_array($result);

if (isset($_POST['logout'])) {
    session_destroy();
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
</head>
<style>
    .gradient-custom {
        background: gray;
    }
</style>

<body>
    <section class="gradient-custom">
        <form action="welcome.php" method="POST">
            <div class="container py-5 h-100%">
                <div class="row d-flex justify-content-center align-items-center h-100vh">
                    <div class="col-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-3 mt-md-2 pb-3">

                                    <h2 class="fw-bold mb-2 text-uppercase">Welcome..</h2>
                                    <center>
                                        <p>Hello, @<?php echo $fetch['firstname']; ?>, your details are here: </p>
                                    </center>
                                    <div class="form-group">
                                        <input class="form-control" class="form-label" placeholder="First Name" class="form-control form-control-lg" value="<?php echo $fetch['firstname']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" value="<?php echo $fetch['lastname']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" value="<?php echo $fetch['email']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mobile" value="<?php echo $fetch['mobile']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control button" type="submit" name="logout" value="logout">
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