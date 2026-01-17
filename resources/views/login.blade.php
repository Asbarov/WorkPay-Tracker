<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - WorkPay Tracker</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <h1>Login</h1>
        <form method="POST" action="/login">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</div>
</body>
</html>




