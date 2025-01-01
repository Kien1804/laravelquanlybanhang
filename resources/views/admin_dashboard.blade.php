<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f9;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #333;
            color: white;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        .card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }
        .card h3 {
            margin-top: 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
        }
        .user-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .user-info .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;
    }
    </style>
</head>
<body>

    <div class="header">
        <h1>Admin Dashboard</h1>
        <div class="user-info">
            <img src="#" alt="Avatar" class="avatar">
            <span>
                <?php
            $name = Session::get('admin_name');
            if($name){
                echo $name;
            }
            ?>
            </span>
        </div>
    </div>

    <div class="sidebar">
        <a href="#dashboard">Dashboard</a>
        <a href="#users">Manage Users</a>
        <a href="#settings">Settings</a>
        <a href="#reports">Reports</a>
        <a href="{{ URL::to('/admin_login') }}">Logout</a>
    </div>

    <div class="main-content">
        {{-- @yield('admin_content') --}}

        <div class="card">
            <h3>Welcome, Admin!</h3>
            <p>This is the admin dashboard where you can manage your application.</p>
        </div>

        <div class="card">
            <h3>Quick Stats</h3>
            <p>Users: 120 | Active Sessions: 34 | Pending Reports: 5</p>
        </div>

        <div class="card">
            <h3>Recent Activity</h3>
            <ul>
                <li>User JohnDoe logged in at 9:00 AM</li>
                <li>New report submitted by User JaneSmith</li>
                <li>System update completed at 11:00 AM</li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Admin Dashboard. All Rights Reserved.</p>
    </div>

</body>
</html>
