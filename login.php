<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>LOG IN</title>
</head>

<body>
    <!--start foorm-->
    <div class="login-box">
        <h2>Conference</h2>
        <h3>Login Form</h3>
        <form id="form" action="l_configuration.php" method="post">
            <div class="user-box">
                <input type="text" name="email" required="" id="email_input">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required="" id="email_input">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="" id="password_input">
                <label>Password</label>
            </div>
            <input type="submit" value="Log In" id="loginbutton" style=" transform: translateX(125px);">
        </form>
    </div>



    <!--end foorm-->
</body>

</html>