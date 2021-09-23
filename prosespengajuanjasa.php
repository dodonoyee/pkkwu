<?php
include("koneksi.php");
if (isset($_POST['a'])) {
    $id_jasa = $_POST['id_jasa'];
    $nama_jasa = $_POST['nama_jasa'];
    $data_yang_diperlukan = $_POST['data_yang_diperlukan'];
    $berkas = $_POST['berkas'];




    $result = mysqli_query($mysqli, "INSERT INTO pengajuan_jasa (id_jasa, nama_jasa, data_yang_diperlukan, berkas)
    VALUES('$id_jasa', '$nama_jasa', '$data_yang_diperlukan', '$berkas')");



    header("location:pengajuanjasa.php");
}
