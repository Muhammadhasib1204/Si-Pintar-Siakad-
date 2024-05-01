<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Halaman Matkul</title>
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
        <h3>Matakuliah</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="matkul_entry.php">Tambah Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 13%">Nama Matakuliah</th>
			  <th style="width: 13%">Jumlah SKS</th>
              <th style="width: 13%">Jam Mata Kuliah</th>
			  <th style="width: 13%">Ruangan Matakuliah</th>
			  <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Pemrograman Website</td>
			   <td>4</td>
			   <td>9-12</td>
               <td>III.1.4</td>
			   <td>
          <button type="button" class="btn btn-edit">
            <a href="#">Edit</a>
          </button>
          <button type="button" class="btn btn-delete" onclick="konfirmasiHapus()">
            <a href="matkul.php">Hapus</a>
          </button>
        </td>
			</tr>
		   </tbody>
		</table>
	   </div>
    </div>
    <script>
    function konfirmasiHapus() {
        if (confirm("Apakah Anda yakin menghapus data ini?")) {
          alert("Data berhasil dihapus");
        } else {
          alert("Penghapusan data gagal");
        }
      }


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