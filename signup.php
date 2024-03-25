<?php
$showalert = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    //$exists=false;
    $existssql = "SELECT * FROM `travelregister` where username ='$username'";
    $re = mysqli_query($con, $existssql);
    $n = mysqli_num_rows($re);
    if ($n > 0) {
        //$exists=true;
        $showerror = "password do not match or username already exists";
    } else {
        //$exists=false;
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `travelregister`(`username`,`password`,`date`) VALUES ('$username','$hash',current_timestamp())";
            $result = mysqli_query($con, $sql);
            if ($result) {
                $showalert = true;
            }
        } else {
            $showerror = "password do not match or username already exists";
        }
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background: url("images/pexels-jeswin-thomas-2910598.jpg");
            margin-top: 0px;
            padding: 0px;
            background-attachment: fixed;
            background-position: center;
            background-size: 100% 100%;
        }
        .container{
            width: 45%;
        }
    </style>
</head>

<body>
    <?php require "partials/_nav.php" ?>
    <?php
    if ($showalert) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Success!</strong> Your account is now created and you can login.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <strong>Error! </strong>' . $showerror .
            '<button type="button" class="btn-close" data-bs-dismiss="danger" aria-label="Close"></button>
            </div>';
    }
    ?>
    <div class="container">
        <h1 class="text-center"> Signup To Our Website</h1>
        <form action="/PHP/project3/signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" maxlength="28"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Comfirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>