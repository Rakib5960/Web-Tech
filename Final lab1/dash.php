<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>
<h3>Welcome, <?php echo $_SESSION["user"]; ?></h3>

<a href="logout.php">Logout</a>

</body>
</html>