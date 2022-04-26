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
<section class="createacc">
    <nav>
        <a href="index.php"><img src="pix/logo1.png"></a>
        <div class="nav-links">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <div class="account">
        <img src="pix/avatar.jpg" class="avatar">
        <h1>Sign up using your email and<br>enter your details later!</h1>
        <form action= "./sign.php" method="post">
            <p>Full name</p>
            <input type="text" name = "firstname" placeholder="Enter your full name">
            <p>Email</p>
            <input type="text" name = "email" placeholder="Enter your email address">
            <p>Username</p>
            <input type="text" name = "username" placeholder="Enter a username">
            <p>Password</p>
            <input type="password" name = "pass" placeholder="Minimum 7 characters">
            <input type="Submit" name="" value="Create account">
        </form>
    </div>
</section>
    
<!--jni-->

</body>
</html>
