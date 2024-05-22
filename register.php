<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body background="LoginBG.svg">
    <center>
        <header>
            <div class="logo">
                <img src="Logo.png" alt="">
            </div>
        </header>
        <main>
            <h2>Daftar</h2>
            <form action="register-proses.php" method="post">
                <table border="1" bgcolor="white">
                    <tr>
                        <td>Email :</td>
                        <td><input type="email" id="email" name="email" placeholder="Masukkan Email Disini" required></td>
                    </tr>
                    <tr>
                        <td>Username : </td>
                        <td><input type="text" id="username" name="username" placeholder="Masukkan Username Disini" required></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" id="password" name="password" placeholder="Masukkan Password Disini" required></td>
                    </tr>
                </table>
                <br>
                <button type="register" value="input data" name="register" id="register">Register</button>
                <br><br>
                Sudah Mempunyai Akun? <a href="login.php">Login</a>
            </form>
        </main>
        <footer>
            <h4>&copy; Sipintar EST 2024</h4>
        </footer>
    </center>
    <script>
</body>
</html>