<?php  
    include('config/koneksi.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TOAK | Home</title>
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    </head>
    <body>
    <div class="kotak-atas"></div>
    <form action="proses/proses_login.php" method="POST">
        <img src="assets/img/login-logo.png">
        <br><br>
        <table>
            <tr>
                <td>a</td>
            </tr>
            <tr>
                <td align="left">
                    <input type="text" name="username" placeholder="Enter your username" required>
                </td>
            </tr>
            <tr>
                <td align="left"></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Enter your password" required></td>
            </tr>
        </table>

        <br>
        <button type="submit" name="login" id="tombollogin">LOGIN</button>
    </form>
    <footer>
        Copyright &copy Toak - 2016, KT-E Project
    </footer>
    </body>
</html>