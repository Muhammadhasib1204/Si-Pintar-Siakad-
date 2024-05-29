<?php
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'matkul.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_matkul WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="logo.png" alt="Logo" class="logo"/>
    </div>
      <ul class="nav-links">
        <li>
          <a href="../home.php">
            <i class='fa fa-home' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="../admin.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="../mahasiswa/mahasiswa.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Data Mahasiswa</span>
          </a>
        </li>
        <li>
            <a href="matkul.php" class="active">
              <i class='bx bx-list-ul' ></i>
              <span class="links_name">Data Matakuliah</span>
            </a>
          </li>
        <li class="log_out">
          <a href="../login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <div class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
     <div class="home-content">
        <h3>Input Matakuliah</h3>
	   <div class="form-login">
        <form action="matkul-proses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
		   <label for="nama_matakuliah">Nama Matakuliah</label>
		   <input class="input" type="text" name="nama_matakuliah" id="nama_matakuliah" value="<?=$data['nama_matkul']?>" />
		   <label for="jumlah_sks">Jumlah SKS</label>
			 <input class="input" type="text" name="jumlah_sks" id="jumlah_sks" value="<?=$data['jumlah_sks']?>" />
		    <label for="jam_matakuliah">Jam Matakuliah</label>
			<input class="input" type="text" name="jam_matakuliah" id="jam_matakuliah" value="<?=$data['jam_matkul']?>"/>
            <label for="ruangan_matkul">Ruangan Matakuliah</label>
		   <input class="input" type="text" name="ruangan_matkul" id="ruangan_matkul" value="<?=$data['ruangan_matkul']?>"style="margin-bottom: 20px" />
		   <button type="submit" class="btn btn-simpan" name="edit"> Ubah </button>
		</form>
	   </div>
    </div>
    <script>

      let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
    if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
    </script>
</body>
</html>