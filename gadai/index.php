<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="forms-container">

            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Your Password">
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="Login">
                    </form>

                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Register</h2>
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Your Password">
                    </div>
                    <input type="submit" class="btn" value="Signup" name="Signup">
                </form>
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <img src="things/undraw_coffee_time_e8cw.svg" alt="" class="image">
                <div class="content">
                    <h3>Don't have an account ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Register</button>
                </div>
            </div>

            <div class="panel right-panel">
                <img src="things/undraw_drink_coffee_v3au.svg" alt="" class="image">
                <div class="content">
                    <h3>have an account ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>
            </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>





<?php
include ("koneksi.php");

if(isset($_POST['Signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hati-hati, kode ini rentan terhadap SQL Injection!
    mysqli_query($koneksi, "INSERT INTO tb_entity (username, email, password) VALUES ('$username', '$email', '$password')");
    header("login.php");

    echo "Tersimpan...";
    header("Location: #.php");
}
?>