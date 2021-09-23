<link rel="stylesheet" type="text/css" href="./asset/style/index.css">

<header>
    <nav>
        <ul>
            <li>
                <a href="admin.php">Admin</a><br>
            </li>
            <li>
                <a href="pendaftar.php">Pendaftar</a><br>
            </li>
            <li>
                <a href="pengajuanjasa.php">Jasa</a><br>
            </li>
            <li>
                <a href="pengajuandata.php">Data</a><br>
            </li>
        </ul>
    </nav>
</header>

<table>
    <h2>
        <a href="#">Admin</a>
    </h2>
    <tr>
        <td>No</td>
        <td>NIK Admin</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama Admin</td>
        <td>Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Alamat</td>
        <td>No Handphone</td>
        <td>Jabatan</td>
        <td>Tanggal Masuk</td>
        <td>Jam kerja</td>
    </tr>

    <?php
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($mysqli, "SELECT * FROM admin");
    while ($row = mysqli_fetch_array($query)) {
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nik_admin'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['nama_admin'] ?></td>
            <td><?php echo $row['tanggal_lahir'] ?></td>
            <td><?php echo $row['jenis_kelamin'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['no_hp'] ?></td>
            <td><?php echo $row['jabatan'] ?></td>
            <td><?php echo $row['tanggal_masuk'] ?></td>
            <td><?php echo $row['jam_kerja'] ?></td>
        </tr>
    <?php } ?>
</table>

<br>

<table>
    <h2>
        <a href="#">Pendaftar</a>
    </h2>
    <tr>
        <td>No</td>
        <td>NIK Pendaftar</td>
        <td>Nama Pendaftar</td>
        <td>Tempat Tanggal Lahir</td>
        <td>Agama</td>
        <td>Alamat</td>
        <td>No Handphone</td>
        <td>Email</td>
        <td>Tanggal Daftar</td>
    </tr>

    <?php
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($mysqli, "SELECT * FROM pendaftar");
    while ($row = mysqli_fetch_array($query)) {
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nik_pendaftar'] ?></td>
            <td><?php echo $row['nama_pendaftar'] ?></td>
            <td><?php echo $row['tempat_tanggal_lahir'] ?></td>
            <td><?php echo $row['agama'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo $row['no_hp'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['tanggal_daftar'] ?></td>
        </tr>
    <?php } ?>
</table>

<br>

<table>
    <h2>
        <a href="#">Pengajuan Jasa</a>
    </h2>
    <tr>
        <td>No</td>
        <td>ID Jasa</td>
        <td>Nama Jasa</td>
        <td>Data Yang Diperlukan</td>
        <td>Berkas</td>
    </tr>

    <?php
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($mysqli, "SELECT * FROM pengajuan_jasa");
    while ($row = mysqli_fetch_array($query)) {
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['id_jasa'] ?></td>
            <td><?php echo $row['nama_jasa'] ?></td>
            <td> <?php
                    if ($row['nama_jasa'] == "KTP") {
                        echo "Foto Copy KK, Foto Copy AKTA";
                    } else if ($row['nama_jasa'] == "KK") {
                        echo "Foto Copy KTP, Foto Copy AKTA";
                    } else if ($row['nama_jasa'] == "AKTA") {
                        echo "Foto Copy KTP, Foto Copy KK";
                    } else {
                        echo "Tidak ada data yang ditemukan";
                    }
                    ?></td>
            <td><img src="./asset/image/<?php echo $row['berkas'] ?>" width="250px"></td>
        </tr>
    <?php } ?>

</table>

<br>

<table>
    <h2>
        <a href="#">Pengajuan Data</a>
    </h2>
    <tr>
        <td>No</td>
        <td>ID Jasa</td>
        <td>NIK Pemohon</td>
        <td>Nama Pemohon</td>
        <td>Tanggal Pengajuan</td>
        <td>Jenis Pengajuan</td>
        <td>Berkas</td>
    </tr>

    <?php
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($mysqli, "SELECT * FROM pengajuan_data");
    while ($row = mysqli_fetch_array($query)) {
    ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['id_jasa'] ?></td>
            <td><?php echo $row['nik_pemohon'] ?></td>
            <td><?php echo $row['nama_pemohon'] ?></td>
            <td><?php echo $row['tanggal_pengajuan'] ?></td>
            <td><?php echo $row['jenis_pengajuan'] ?></td>
            <td><img src="./asset/image/<?php echo $row['berkas'] ?>" width="250px"></td>
        </tr>
    <?php } ?>

</table>