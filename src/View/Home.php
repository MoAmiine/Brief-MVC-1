<?php
use App\Core\Router;
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: /auth/login');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Dashboard</title>
    <link rel="stylesheet" href="../../Public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="home-body">
    <nav class="navbar">
        <div class="nav-logo">MyProject<span>.</span></div>
        <ul class="nav-links">
            <li><a href="/home" class="active">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="../../../../auth/logout" class="logout-link"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
        </ul>
    </nav>

    <main class="home-container">
        <div class="welcome-card">
            <div class="user-avatar">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <h1>Welcome back, <span class="username"><?= $_SESSION['user']['Firstname'] ?></span></h1>
            <p>You have successfully logged into your MVC dashboard. From here, you can manage your data and explore the features of the application.</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>Status</h3>
                    <p class="status-badge">Active</p>
                </div>
                <div class="stat-item">
                    <h3>Role</h3>
                    <p>Member</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>