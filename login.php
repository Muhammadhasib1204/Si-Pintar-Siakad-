<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $validUsername = "hasib";
  $validPassword = "12345";

  if ($username === "" || $password === "") {
    echo "<script>alert('Isi semua data terlebih dahulu.');</script>";
  } elseif ($username === $validUsername && $password === $validPassword) {

    $_SESSION['user'] = $username;
    setcookie('pass', $username, time() + (86400 * 30), '/'); 
    echo "<script>alert('Login berhasil!'); window.location.href = 'admin.php';</script>";
    exit();
  } else {
    echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
    exit();
}
}
?>

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
            <form action="login.php" method="post">
                <table border="1" bgcolor="white">
                    <tr>
                        <td>Username :</td>
                        <td>
                            <input type="text" id="user" name="user">
                        </td>
                    </tr>

                    <tr>
                        <td>Password :</td>
                        <td>
                            <input type="password" id="pass" name="pass">
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
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