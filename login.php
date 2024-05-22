
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body background="LoginBG.svg">
    <center>
        <header> 
                <div class="logo">
                    <img src="Logo.png" alt=""/>
                </div>
        </header>
        <main>
            <h2>Login</h2>
            <form action="login-proses.php" method="post">
                <table border="1" bgcolor="white">
                    <tr>
                        <td>Username :</td>
                        <td>
                            <input type="text" id="username" name="username">
                        </td>
                    </tr>

                    <tr>
                        <td>Password :</td>
                        <td>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <br><br>
                Belum daftar? <a href="register.php">Register</a>
            </form>
        </main>
        <footer>
            <h4>&copy; Sipintar EST 2024</h4>
        </footer>
    </center>
</body>
</html>