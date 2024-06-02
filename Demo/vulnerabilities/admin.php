<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Admin Page!</h1>
        <p>Are you Admin?</p>
        <a href="../dashboard.php">Go to Dashboard</a> 
        <a/logout.php">Logout</a>
    </div>
</body>
</html>
