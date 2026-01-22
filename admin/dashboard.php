<?php
require_once "../includes/auth.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>

<ul>
    <li><a href="students.php">Manage Students</a></li>
    <li><a href="categories.php">Manage Categories</a></li>
    <li><a href="books.php">Manage Books</a></li>
    <li><a href="issue_book.php">Issue Books</a></li>
    <li><a href="return_book.php">Return Books</a></li>
    <li><a href="../logout.php">Logout</a></li>
</ul>

</body>
</html>
