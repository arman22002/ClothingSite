<?php
session_start();

$error_message = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $correct_username = "admin";
    $correct_password = "12345";

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
        header("Location: home.html"); // redirect on success
        exit();
    } else {
        $error_message = "Invalid username or password ❌";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Shirt & Pant Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; height: 100vh; overflow: hidden; }

        .main-container { display: flex; height: 100vh; width: 100%; }

        .left-section {
            width: 50%;
            background-image: url("image.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .right-section {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f5f5f5;
        }

        .login-container {
            width: 320px;
            padding: 30px;
            background: white;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .login-container h2 { margin-bottom: 20px; }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background: #2a5298;
            color: white;
            border: none;
            cursor: pointer;
        }

        .login-container button:hover { background: #1e3c72; }

        .note { margin-top: 15px; font-size: 14px; }
        .error { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="main-container">
    <div class="left-section"></div>

    <div class="right-section">
        <div class="login-container">
            <h2>Welcome Back 👕👖</h2>

            <?php if (!empty($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>

            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>

            <p class="note">New user? <a href="register.php">Register here</a></p>
        </div>
    </div>
</div>

</body>
</html>
