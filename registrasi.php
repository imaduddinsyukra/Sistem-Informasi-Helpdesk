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
    <form id="slick-login" action="prosesregistrasi.php" method="post">
        <label for="nama">Nama</label><input type="text" name="nama" class="placeholder" placeholder="Nama" autofocus required>
        <label for="username">username</label><input type="text" name="username" class="placeholder" placeholder="Username" autofocus required>
        <label for="password">password</label><input type="password" name="password" class="placeholder" placeholder="Password" minlength="8" required>
        <input type="submit" value="Registrasi" name="login">
    </form>
</body>
 
</html>