<?php
include '../classes/database.php';
$db = new database();
?>

<div class="px-4 py-3">
    <?php
    include 'navbar.php';
    ?>
    <div class="px-3 py-2">
    <h3>Edit Data Mahasiswa</h3>
    <form action="proses_mhs.php?aksi=update" method="post">
    <?php
    foreach($db->edit_mhs($_GET['id']) as $d){
    ?>
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $d['id'] ?>">
            <input type="text" name="nim" class="form-control" value="<?php echo $d['nim'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <td><input type="text" name="nama" class="form-control" value="<?php echo $d['nama'] ?>"></td>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" cols="10" rows="3" class="form-control" ><?php echo $d['alamat'] ?></textarea>
        </div>
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    <?php
    }
    ?>
    </form>
    </div>
</div>
