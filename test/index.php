<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inbox</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to your Inbox, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>This is a protected page that only logged-in users can access.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
