<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security Vulnerabilities Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
        }

        .container {
            max-width: 95%;
            height: auto;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            color: red;
        }

        p {
            margin-bottom: 20px;
            text-align: center;
        }

        .gif-container {
            margin: 20px 0;
        }

        .gif {
            display: block;
            margin: 0 auto;
        }

        .login-button,
        .logout-button,
        .extra-login-button {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .login-button:hover,
        .logout-button:hover,
        .extra-login-button:hover {
            background-color: #0056b3;
        }

        .extra-login-button {
            margin-top: 20px;
        }

        .logout-button {
            background-color: #dc3545;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .copyright {
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Security Vulnerabilities Demo</h1>
        <?php if (isset($_SESSION['username'])): ?>
            <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
            <a href="dashboard.php" class="login-button">Go to Dashboard</a>
            <button onclick="location.href='logout.php'" class="logout-button">Logout</button>
        <?php else: ?>
            <div class="gif-container">
                <img src="img/cool-fun.gif" alt="Cool Fun GIF" class="gif">
            </div>
            <p>This website will help you test the Acunetix tool for common vulnerabilities. Enjoy it!</p>
            <p>You must log in to access the vulnerabilities.</p>
            <a href="login.php" class="login-button">Login</a>
        <?php endif; ?>
        <div class="copyright">
            Copyright: Ngọc Thơ - Thu Hiền
        </div>
    </div>
</body>
</html>
