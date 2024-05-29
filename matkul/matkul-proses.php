<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $namamk = $_POST['nama_matakuliah'];
    $jumlah = $_POST['jumlah_sks'];
    $jam = $_POST['jam_matakuliah'];
    $ruangan = $_POST['ruangan_matkul'];

    $sql = "INSERT INTO tb_matkul VALUES(NULL, '$namamk', '$jumlah', '$jam','$ruangan')";

    if(empty($namamk) || empty($jumlah)|| empty($jam) || empty($ruangan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'matkul-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Matkul Berhasil Ditambahkan');
                window.location = 'matkul.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'matkul-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $namamk = $_POST['nama_matakuliah'];
    $jumlah = $_POST['jumlah_sks'];
    $jam = $_POST['jam_matakuliah'];
    $ruangan = $_POST['ruangan_matkul'];

    $sql = "UPDATE tb_matkul SET 
           nama_matkul = '$namamk',
           jumlah_sks = '$jumlah',
           jam_matkul = '$jam',
           ruangan_matkul = '$ruangan'
            WHERE id = $id ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Matkul Berhasil Diubah');
                window.location = 'matkul.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'matkul-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_matkul WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Matkul Berhasil Dihapus');
                window.location = 'matkul.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Matkul Gagal Dihapus');
                window.location = 'matkul.php';
            </script>
        ";
    }
}else {
    header('location: matkul.php');
}
