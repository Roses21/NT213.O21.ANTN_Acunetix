<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}

function show_file($file)
{
    $file_path = "../files/" . $file;
    if (is_file($file_path)) {
        $file_open = fopen($file_path, "r") or die("Couldn't open $file.");
        while (!feof($file_open)) {
            echo nl2br(htmlspecialchars(fgets($file_open))) . "<br>";
        }
        fclose($file_open);
    } else {
        echo "This file doesn't exist!";
    }
}

function show_file_source($file)
{
    $file_path = $file; // Để nguyên đường dẫn gốc cho các file .php
    if (is_file($file_path)) {
        echo '<pre>' . htmlspecialchars(file_get_contents($file_path)) . '</pre>';
    } else {
        echo "This file doesn't exist!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Broken Access Control</title>
    <style>
        .container {
            margin: 50px auto;
            max-width: 800px;
        }
        pre {
            background-color: #282c34;
            color: #61dafb;
            padding: 20px;
            border-radius: 10px;
            overflow: auto;
        }
        ul.file-list {
            list-style: none;
            padding: 0;
            margin: 0 0 20px 0; /* Khoảng cách dưới cùng */
        }
        ul.file-list li {
            display: inline;
            margin-right: 10px;
        }
        .dashboard-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .dashboard-btn:hover {
            background-color: #0056b3;
        }
        h1 {
            color: red; /* Màu đỏ cho tiêu đề */
            margin-bottom: 30px; /* Khoảng cách dưới cùng */
        }
        p, .content {
            color: #000000; /* Màu đen cho nội dung */
            margin-bottom: 20px; /* Khoảng cách dưới cùng */
        }
        .content {
            width: 100%;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Get your message today here!</h1>
        <div class="menu">
            <ul class="file-list">
                <li><a href="?file=Group3.txt">Group3.txt</a></li>
                <li><a href="?file=Secret.txt">Secret.txt</a></li>
                <li><a href="../dashboard.php" class="dashboard-btn">Go to Dashboard</a></li>
            </ul>
        </div>

        <div class="content">
        <?php
        if (!empty($_GET['file'])) {
            $file = $_GET['file'];
            // Check if the file extension is .php to use highlight_file function
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                show_file_source($file);
            } else {
                show_file($file);
            }
        }
        ?>
        </div>
    </div>
</body>
</html>
