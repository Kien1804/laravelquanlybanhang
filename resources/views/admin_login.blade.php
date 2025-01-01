<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            border: 1px solid #dddddd;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #dddddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container a {
            display: block;
            margin-top: 15px;
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <?php
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message',null);
        }
        ?>
        <form action="{{ URL::to('/admin_dashboard') }}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="admin_email" placeholder="Điền email" required="">
            <input type="password" name="admin_password" placeholder="Điền Password" required="">
            <button type="submit">Login</button>

            {{-- <span><input type="checkbox" />Nhớ đăng nhập</span>
            <h6><a href="#">Quên mật khẩu</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Đăng nhập" name="login"> --}}
        </form>
        <a href="#">Forgot Password?</a>
    </div>
</body>
</html>
