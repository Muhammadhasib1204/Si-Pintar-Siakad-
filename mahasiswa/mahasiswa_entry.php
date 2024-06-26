
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="Logo.png" alt="Logo" class="logo"/>
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
          <a href="mahasiswa.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Data Mahasiswa</span>
          </a>
        </li>
        <li>
            <a href="../matkul/matkul.php">
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
	  <h3>Data Mahasiswa</h3>
	  <div class="form-login">
		<form action="mahasiswa-proses.php" method="post" enctype="multipart/form-data">
	  	    <label for="nama_mahasiswa">Nama Mahasiswa</label>
			<input class="input" type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Nama Mahasiswa"/>
 		    <label for="nim_mahasiswa">NIM Mahasiswa</label>
			<input class="input" type="text" name="nim_mahasiswa" id="nim_mahasiswa" placeholder="NIM Mahasiswa" />
            <label for="kelas">Kelas</label>
			<input class="input" type="text" name="kelas" id="kelas" placeholder="Kelas" />
            <label for="Jurusan">Jurusan</label>
			<input class="input" type="text" name="Jurusan" id="Jurusan" placeholder="Jurusan"/>
            <label for="Prodi">Prodi</label>
			<input class="input" type="text" name="Prodi" id="Prodi" placeholder="Prodi" style="margin-bottom: 20px"/>
		   <button type="submit" class="btn btn-simpan" name="simpan"> Simpan </button>
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