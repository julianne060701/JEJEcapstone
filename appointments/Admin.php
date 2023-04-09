<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login_admin.css">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="image-container"></div>
        <div class="login-container">
            <h2 class="login-label">Admin Login</h2>
            <form>
                <div class="input-group">
                    <label class="input-label" for="username">Username</label>
                    <input class="input-field" type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label class="input-label" for="password">Password</label>
                    <input class="input-field" type="password" id="password" name="password" required>
                    <a class="forgot-password-link" href="#">Forgot Password?</a>
                </div>
                <div class="login-button-container">
                   <button class="login-button" onclick="window.location.href='Dashboard.php'">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>