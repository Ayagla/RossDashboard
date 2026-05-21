<?php
// Auth logic will be added here later.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Ross Ragland</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="login-page">
    <main class="login-card">
        <header class="login-header">
            <h1>Ross Ragland</h1>
            <p>Login</p>
        </header>

        <form method="post" action="dashboard.php">
            <div class="form-group">
                <label for="username">Username Or Email</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="a.manning"
                    autocomplete="username"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="current-password"
                >
            </div>

            <button type="submit" class="btn-authenticate">Authenticate</button>
        </form>
    </main>
</body>
</html>
