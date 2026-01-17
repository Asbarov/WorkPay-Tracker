<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - WorkPay Tracker</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="register-container">
    <div class="register-box">
        <h1>Register</h1>
        <form method="POST" action="/register">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>
</body>
</html>



