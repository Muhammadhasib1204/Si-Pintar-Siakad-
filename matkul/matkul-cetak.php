<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_matkul");
$html = '<center><h3>Data Matkul</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Matkul</th>
                <th>Jumlah SKS</th>
                <th>Jam Matkul</th>
                <th>Ruangan Matkul</th>
            </tr>';
$no = 1;
while ($matkul = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $matkul['nama_matkul'] . "</td>
                <td>" . $matkul['jumlah_sks'] . "</td>
                <td>" . $matkul['jam_matkul'] . "</td>
                <td>" . $matkul['ruangan_matkul'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream('daftar-matkul.pdf');
?>
