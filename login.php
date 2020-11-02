<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="slick Login">
    <meta name="author" content="Webdesigntuts+">
    <link rel="stylesheet" type="text/css" href="lib/css/stylelogin.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
    <script type="text/javascript" src="placeholder.js"></script>
</head>
 
<body>
    <form id="slick-login" action="proseslogin.php" method="post">
        <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Username" autofocus required>
        <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Password" minlength="8" required>
        <input type="submit" value="Log In" name="login"><br><br>
        <font color="white"><small>Belum Punya Akun?</small><a href="registrasi.php"> <br><font color="white"><b>Silahkan Registrasi Disini</b></a></font>
    </form>
</body>
 
</html>