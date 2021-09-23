<?php
include("koneksi.php");
if(isset($_POST['a'])) {
    $nik_admin = $_POST['nik_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_admin = $_POST['nama_admin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jabatan = $_POST['jabatan'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jam_kerja = $_POST['jam_kerja'];

    


    

    $result = mysqli_query($mysqli, "INSERT INTO admin (nik_admin, username, password, nama_admin, tanggal_lahir, jenis_kelamin, alamat, no_hp, jabatan, tanggal_masuk, jam_kerja)VALUES
    ('$nik_admin', '$username', '$password', '$nama_admin', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$no_hp', '$jabatan', '$tanggal_masuk', '$jam_kerja')");



    header("location:admin.php");
}
?>
