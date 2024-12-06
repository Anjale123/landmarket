<?php
    require_once 'connection/connection.php';
?>
<?php
    session_start();
    if(isset($_POST["login"])){
        $mail = mysqli_real_escape_string($connection,$_POST["mail"]);
        $pswd = mysqli_real_escape_string($connection,$_POST["pswd"]);

        if($mail != "" && $pswd != ""){
            $sql1 = "SELECT * FROM users WHERE mail='{$mail}' AND pswd='{$pswd}'";

            $result_set1 = mysqli_query($connection,$sql1);

            if(mysqli_num_rows($result_set1) == 1){
                $row = mysqli_fetch_assoc($result_set1);

                $_SESSION['user_id'] = $row['userid'];
                header("Location: index.php");
            }        
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="signup-form text-center p-5 shadow rounded">
        <img src="user.png" alt="">
        <h2 class="mb-4">Sign Up</h2>
        <form>
            <div class="form-group">
                <label for="name"><b>Full Name</b></label>
                <input type="text" class="form-control" id="name" placeholder="Enter your full name" style="border-color: #06b30e">
            </div>
            <div class="form-group">
                <label for="email"><b>Email address</b></label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" style="border-color: #06b30e">
            </div>
            <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" style="border-color: #06b30e">
            </div>
            <div class="form-group">
                <label for="confirm-password"><b>Confirm Password</b></label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Confirm password" style="border-color: #06b30e">
            </div>
            <button type="submit" class="btn btn-block" style="background-color: #06b30e; color: white; border: none;">Sign Up</button>

        </form>
        <div class="mt-3">
            Already have an account? <a href="Loginpage.php" style="color: #06b30e; text-decoration: none">Log in</a>
        </div>

    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
