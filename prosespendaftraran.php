<?php
include("koneksi.php");
if(isset($_POST['a'])) {
    $nik_pendaftar = $_POST['nik_pendaftar'];
    $nama_pendaftar = $_POST['nama_pendaftar'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $tanggal_daftar = $_POST['tanggal_daftar'];


    

    $result = mysqli_query($mysqli, "INSERT INTO pendaftar (nik_pendaftar, nama_pendaftar, tempat_tanggal_lahir, agama, alamat, no_hp, email, tanggal_daftar)VALUES
    ('$nik_pendaftar', '$nama_pendaftar', '$tempat_tanggal_lahir', '$agama', '$alamat', '$no_hp', '$email', '$tanggal_daftar')");



    header("location:pendaftar.php");
}
?>
