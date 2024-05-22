<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim_mahasiswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['Jurusan'];
    $prodi = $_POST['Prodi'];

    $sql = "INSERT INTO tb_mahasiswa VALUES(NULL, '$nama', '$nim', '$kelas','$jurusan','$prodi')";

    if(empty($nama) || empty($nim)|| empty($kelas) || empty($jurusan) || empty($prodi)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'mahasiswa-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Mahasiswa Berhasil Ditambahkan');
                window.location = 'mahasiswa.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'mahasiswa-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $nama = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim_mahasiswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['Jurusan'];
    $prodi = $_POST['Prodi'];

    $sql = "UPDATE tb_mahasiswa SET 
           Nama = '$nama',
           NIM = '$nim',
           Kelas = '$kelas',
           Jurusan = '$jurusan',
           Prodi = '$prodi'
            WHERE id = $id ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Mahasiswa Berhasil Diubah');
                window.location = 'mahasiswa.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'mahasiswa-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_mahasiswa WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Mahasiswa Berhasil Dihapus');
                window.location = 'mahasiswa.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Mahasiswa Gagal Dihapus');
                window.location = 'mahasiswa.php';
            </script>
        ";
    }
}else {
    header('location: mahasiswa.php');
}
