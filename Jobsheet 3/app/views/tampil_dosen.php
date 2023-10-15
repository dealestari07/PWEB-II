<?php
//memanggil class database
    include '../classes/database.php';
    $db= new database; //instasiasi class database
?>

<div class="px-4 py-3">
    <?php
    include 'navbar.php';
    ?>
    <div class="px-3 py-2">
    <h3>Data Dosen</h3>
    <a class="btn btn-primary mt-2" href="tambah_dosen.php">Tambah Dosen</a><br><br>
    <table class="table">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        $no=1;
        foreach($db->tampil_dosen() as $x){
            ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $x['nidn']?></td>
            <td><?php echo $x['nama']?></td>
            <td><?php echo $x['alamat']?></td>
            <td>
                <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $x['id']; ?> &aksi=edit_dosen">Edit</a>
                <a class="btn btn-danger" href="proses_dosen.php?id=<?php echo $x['id']; ?> &aksi=hapus_dosen">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</div>