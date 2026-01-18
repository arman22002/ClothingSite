<?php
include "db.php";

if (isset($_POST['submit'])) {

    $name     = $_POST['fullname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $role     = "user";

    $check = "SELECT id FROM users WHERE email='$email'";
    $checkResult = mysqli_query($conn, $check);

    if (mysqli_num_rows($checkResult) > 0) {
        $msg="this email is already used";

        if (isset($_POST['submit']) && isset($msg)) {
    echo "<script>alert('$msg');</script>";
}

    } else {

        $sql = "INSERT INTO users (name,email,password,phone,address,role)
                VALUES ('$name','$email','$password','$phone','$address','$role')";

        if (mysqli_query($conn, $sql)) {
            echo "Registered successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Register | Shirt & Pant Store</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .shoplink{
            display: block;
            width: 100px;
            position: fixed;
            top: 25px;
            left: 45%;
            text-align: center;
            text-decoration: none;
            background-color: lightgreen;
            padding: 10px;

        }

        .register-box {
            background: #fff;
            padding: 30px;
            width: 350px;
            border-radius: 8px;
            text-align: center;
        }

        .register-box h2 {
            margin-bottom: 20px;
        }

        .register-box input {
            width: 95%;
            padding: 10px;
            margin: 8px 0;
        }

        .register-box button {
            width: 100%;
            padding: 10px;
            background: #ff7e5f;
            color: white;
            border: none;
            cursor: pointer;
        }

        .register-box button:hover {
            background: #e96b4f;
        }

        .message {
            margin-top: 15px;
            color: green;
            font-weight: bold;
        }

        .note {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>

    <script>
        function validateForm() {
            let fullname = document.getElementById("fullname").value;
            let email = document.getElementById("email").value;
              let password = document.getElementById("password").value;
            // let username = document.getElementById("username").value;
            let phone = document.getElementById("phone").value;
            let address = document.getElementById("address").value;
          
            let confirm = document.getElementById("confirm").value;


            if (fullname === "" || email === "" || password === ""|| phone === "" || address === "" ) {
                alert("All fields are required!");
                return false;
            }

            if (password.length < 5) {
                alert("Password must be at least 5 characters");
                return false;
            }

            if (password !== confirm) {
                alert("Passwords do not match!");
                return false;
            }

            return true;
        }
    </script>

</head>
<body>

<div class="register-box">
    
    <a class="shoplink" href="index.php">shop</a>
    
    <h2>Create Account 🛍️</h2>

    <form method="POST" onsubmit="return validateForm()">
        <input type="text" name="fullname" id="fullname" placeholder="Full Name">
        <input type="email" name="email" id="email" placeholder="Email">
        <!-- <input type="text" name="username" id="username" placeholder="Username"> -->
        <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number">
        <input type="text" name="address" id="address" placeholder="Enter Your Address">
        <input type="password" name="password" id="password" placeholder="Password">
        <input type="password" id="confirm" placeholder="Confirm Password">
        <button type="submit" name="submit" id ="submit">Register</button>
    </form>

  
    <p class="note">Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
