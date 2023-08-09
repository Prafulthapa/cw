<?php
session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel - Menu Management</title>
</head>
<body>
    <header>
        <h1>Admin Panel - Menu Management</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Menu Management</a></li>
            <li><a href="#">Order Management</a></li>
            <li><a href="logout.php">Logout</a></li>
            <!-- Add more navigation links for other sections -->
        </ul>
    </nav>
    
    <main>

    <h2>User Management</h2>
    <button id="addUserBtn">Add New User</button>
    <table id="userTable">
        <tr>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <h2>Menu Items</h2>
        <button id="addMenuItemBtn">Add New Item</button>
        <table id="menuTable">
            <tr>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
            <!-- Table rows for menu items will be added here dynamically -->
        </table>
    </main>
    
    <script src="admin.js"></script>
</body>
</html>


