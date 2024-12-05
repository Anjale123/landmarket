<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="login-form text-center p-4 shadow rounded">
        <img src="user.png" alt="">
        <h2 class="mb-4">Login</h2>
        <form>
            <div class="form-group">
                <label for="email" style="margin-bottom: 5px"><b> Email Address</b></label>
                <input type="email" style="margin-bottom: 20px;border-color:#06b30e;" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password" style="margin-bottom: 5px"><b>Password</b></label>
                <input type="password" style="margin-bottom: 20px;border-color:#06b30e;" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-block" style="background-color: #06b30e;color:white;">Login</button>
        </form>
        <div class="mt-3">
            <a href="#" style="text-decoration: none; color: black;">Forgot password?</a>
        </div>
        <div class="mt-3">
            Don't have an account? <a href="Singup page.php" style="text-decoration: none;color:#06b30e ;">Sign up</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
