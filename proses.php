<?php
include 'koneksi.php';

// ambil data
$nama = $_POST['nama'];
$layanan = $_POST['layanan'];
$jumlah = $_POST['jumlah'];

// hitung harga
if ($layanan == "Print Hitam Putih") $harga = 500;
elseif ($layanan == "Print Warna") $harga = 1000;
else $harga = 300;

$total = $harga * $jumlah;


$file = $_FILES['file']['name'];
$tmp  = $_FILES['file']['tmp_name'];

$folder = "upload/";

if (!is_dir($folder)) {
    mkdir($folder, 0777, true);
}

$file_baru = time() . "_" . $file;

move_uploaded_file($tmp, $folder . $file_baru);

mysqli_query($koneksi, "INSERT INTO pesanan 
VALUES('', '$nama', '$layanan', '$jumlah', '$file_baru', '$total', 'Diproses')");

// redirect
echo "<script>
alert('Pesanan berhasil!');
window.location='index.php';
</script>";
?>