<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../stylesheets/header.css">
    <link rel="stylesheet" href="../../stylesheets/main.css">
    <link rel="stylesheet" href="../../stylesheets/login.css">
    <title>Login</title>
</head>
<body>

    <?php
        include_once '../../component/header.php';
    ?>
    
    <div id="login-box">
            <h1>Login</h1>
            <form action="" method="post" onsubmit="return validateForm()">
                <h3>User name</h3>
                <input id="username" type="text" placeholder="username...">
                <h3>Password</h3>
                <input id="password" type="password" placeholder="password...">
                <button type="submit">Login</button>
            </form>
    </div>

    <script>
        <?php
            include_once '../../js/valid-input.js';
        ?>
    </script>
    
    
</body>
</html>