<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 100%;
            height: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            color: red;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
            margin: 20px 0;
        }

        li {
            margin-bottom: 15px;
        }

        li a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        li a:hover {
            background-color: #f0f0f0;
        }

        p {
            margin-bottom: 20px;
            text-align: center;
        }

        .logout-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .logout-link:hover {
            background-color: #0056b3;
        }

        .copyright {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        .hello-admin {
            font-weight: bold;
            font-size: 1.2em;
            color: #007bff;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>
        <ul>
            <li><a href="vulnerabilities/broken_access_control.php">1. Broken Access Control</a></li>
            <li><a href="vulnerabilities/security_misconfiguration.php">2. Security Misconfiguration</a></li>
            <li><a href="vulnerabilities/DOM_XSS.php">3. DOM Based XSS</a></li>
            <li><a href="#">4. </a></li>
            <li><a href="#">5. </a></li>
            <li><a href="#">6. </a></li>
        </ul>
        <p class="hello-admin">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        <a href="logout.php" class="logout-link">Logout</a>
        <div class="copyright">
            Copyright: Ngọc Thơ - Thu Hiền
        </div>
    </div>
</body>
</html>
