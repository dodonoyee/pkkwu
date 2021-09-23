<?php
include("koneksi.php");
if (isset($_POST['a'])) {
    $id_jasa = $_POST['id_jasa'];
    $nik_pemohon = $_POST['nik_pemohon'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $tanggal_pengajuan = $_POST['tanggal_pengajuan'];
    $jenis_pengajuan = $_POST['jenis_pengajuan'];
    $berkas = $_POST['berkas'];




    $result = mysqli_query($mysqli, "INSERT INTO pengajuan_data (id_jasa, nik_pemohon, nama_pemohon, tanggal_pengajuan, jenis_pengajuan, berkas)VALUES
    ('$id_jasa', '$nik_pemohon', '$nama_pemohon', '$tanggal_pengajuan', '$jenis_pengajuan', '$berkas')");



    header("location:pengajuandata.php");
}
