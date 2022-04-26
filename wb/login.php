<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content"with=device-width, initia-scale=1.0">
<title>"DATING WEBSITE"</title>
<link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@800&display=swap" rel="stylesheet">
</head>
<body>
<section class="login">
    <nav>
        <a href="index.html"><img src="pix/logo1.png"></a>
        <div class="nav-links">
            <ul>
            <li><a href="index.php">HOME</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <div class="loginbox">
        <img src="pix/avatar.jpg" class="avatar">
        <h1>Login Here</h1>
        <form action="./wb/stuff/log.php" method="post">
            <p>E-mail</p>
            <input type="text" name="email" placeholder="Enter email">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter password">
            <input type="Submit" name="login" value="Log in">
            <a href="#">Forgot password?</a><br>
            <a href="createaccount.php">Don't have an account? Sign up now!</a>
        </form>
    </div>
</section>
    
<!--jni-->

</body>
</html>
