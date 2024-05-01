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
            <form action="login.php" method="post">
                <table border="1" bgcolor="white">
                    <tr>
                        <td>Username :</td>
                        <td><input type="text" id="user" name="user" placeholder="Masukkan Nama Disini" required></td>
                    </tr>
                    <tr>
                        <td>Password : </td>
                        <td><input type="password" id="user_pass" name="user_pass" placeholder="Masukkan Password Disini" required></td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td><input type="email" id="mail" name="mail" placeholder="Masukkan Email Disini" required></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td>
                            <input type="radio" name="gender"> Laki-Laki
                            <input type="radio" name="gender"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat : </td>
                        <td><textarea></textarea></td>
                    </tr>
                </table>
                <br>
                <button type="register" value="input data" onclick="RegisterForm()">Register</button>
                <br><br>
                Sudah Mempunyai Akun? <a href="login.php">Login</a>
            </form>
        </main>
        <footer>
            <h4>&copy; Sipintar EST 2024</h4>
        </footer>
    </center>
    <script>
  function RegisterForm() {
    var username = document.getElementById("user").value;
    var password = document.getElementById("user_pass").value;
    var email = document.getElementById("mail").value;
    

    if (username === "" || password === "" || email === "") {
      alert("Isi semua data terlebih dahulu.");
      return false;
    }

    alert("Register berhasil! Silahkan login.");

    return true;
  }
</script>
</body>
</html>