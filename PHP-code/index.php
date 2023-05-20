<?php
    session_start();
    include("connections.php");
    include("functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Login System</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>This is the index page</h1>
    <br>
    Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>