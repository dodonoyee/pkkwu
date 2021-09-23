<h3>Jasa</h3>
<form action="prosespengajuanjasa.php" method="post">
    <table>
        <tr>
            <td>ID Jasa</td>
            <td><input type="text" name="id_jasa"></td>
        </tr>
        <tr>
            <td>Nama Jasa</td>
            <td>
                <input type="radio" id="KTP" name="nama_jasa" value="KTP">
                  <label for="KTP">KTP</label><br>
                <input type="radio" id="KK" name="nama_jasa" value="KK">
                  <label for="KK">KK</label><br>
                <input type="radio" id="AKTA" name="nama_jasa" value="AKTA">
                  <label for="AKTA">AKTA</label><br>
            </td>
        </tr>
        <tr>
            <td>Data yang diperlukan</td>
            <td></td>
        </tr>
        <tr>
            <td>Berkas</td>
            <td><input type="file" name="berkas"></td>
        </tr>
        <tr>
            <td><input type="submit" name="a" placeholder="Kirim"></td>
        </tr>
    </table>
</form>