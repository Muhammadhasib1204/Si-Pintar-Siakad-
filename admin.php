<?php 
  include 'koneksi.php';
  $sql_mhs = "SELECT COUNT(*) as total_mhs FROM tb_mahasiswa";
  $result_mhs = $koneksi->query($sql_mhs);
  $total_mhs = $result_mhs->fetch_assoc()['total_mhs'];
 
  $sql_matkul = "SELECT COUNT(*) as total_matkul FROM tb_matkul";
  $result_matkul = $koneksi->query($sql_matkul);
  $total_matkul = $result_matkul->fetch_assoc()['total_matkul'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard Admin</title>
    <link rel="stylesheet" href="css/admin.css">
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
          <a href="home.php">
            <i class='fa fa-home' ></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./mahasiswa/mahasiswa.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Data Mahasiswa</span>
          </a>
        </li>
        <li>
          <a href="./matkul/matkul.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Data Matakuliah</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
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
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
      </div>
    </nav>
     <div class="home-content">
       <div class="overview-boxes">
          <h2>Selamat Datang Di Halaman Admin!</h2>
          <div id="tanggal"></div>
          <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_mhs; ?></div>
                        <div class="cardName">Mahasiswa</div>
                    </div>
                    <div class="iconBx">
                      <i class='bx bx-body'></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $total_matkul; ?></div>
                        <div class="cardName">Matkul</div>
                    </div>
                    <div class="iconBx">
                    <i class='bx bx-book-content'></i>
                    </div>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function Waktu() {
      let date = new Date();
      let day = date.getDay();
      let days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
      let month = date.getMonth();
      let months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
      let year = date.getFullYear();
      let session = "AM";
      let formattedDate =
        days[day] + ", " + date.getDate() + " " + months[month] + " " + year;
      document.getElementById("tanggal").innerText = formattedDate;
    }
    Waktu();

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
  <style>
    .cardBox {
	position: relative;
	width: 100%;
	padding: 20px;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 50px;
  }
  
  .cardBox .card {
	position: relative;
	padding: 20px;
	border-radius: 20px;
	display: flex;
	justify-content: space-between;	
	cursor: pointer;
	box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
  }
  
  .cardBox .card .numbers {
	position: relative;
	font-weight: 500;
	font-size: 2.5rem;
  }
  
  .cardBox .card .cardName {
	font-size: 1.3rem;
	margin-top: 5px;
  }
  
  .cardBox .card .iconBx {
	font-size: 4.5rem;
	color: darkslateblue;
  }

  .cardBox .card:hover {
	background: #c7c0e9;
  }
  </style>
</body>
</html>