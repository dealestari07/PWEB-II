
<div class="px-4 py-3">
    <?php
    include 'navbar.php';
    ?>
    <div class="px-3 py-2">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_mhs.php?aksi=tambah" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
            <td>
                <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
            </td>
            </tr>
        </table>
    </form>
    </div>
</div>