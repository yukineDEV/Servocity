<?php
// config.php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'servocity');

// database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if user is logged in
function checkLogin() {
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit();
    }
}

?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServoCity Admin</title>
    <link rel="stylesheet" href="../assets/css/style-admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="logo">
                <img src="../assets/image/servocity-text.png" alt="ServoCity">
            </div>
            <ul class="nav-links">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="activity.php">
                        <i class="fas fa-chart-line"></i>
                        <span>Activity</span>
                    </a>
                </li>
                <li>
                    <a href="user-management.php">
                        <i class="fas fa-users"></i>
                        <span>User Management</span>
                    </a>
                </li>
                <li>
                    <a href="analytics.php">
                        <i class="fas fa-chart-bar"></i>
                        <span>Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="security.php">
                        <i class="fas fa-shield-alt"></i>
                        <span>Security</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <header class="top-bar">
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <i class="fas fa-search"></i>
                </div>
                <div class="user-menu">
                    <div class="notifications" data-count="3">
                        <img src="../assets/image/notification-icon.png" alt="notifications">
                    </div>
                    <div class="messages" data-count="3">
                        <img src="../assets/image/message-icon.png" alt="messages">
                    </div>
                    <div class="profile">
                        <img src="images/profile.jpg" alt="Profile">
                        <span>Admin</span>
                    </div>
                </div>
            </header>

            <div class="content">
                <!-- Content will be loaded here based on the selected menu item -->
            </div>
        </main>
    </div>
    <script src="../assets/javascript/admin.js"></script>
</body>
</html>
