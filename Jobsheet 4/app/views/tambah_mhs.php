
<div class="px-4 py-3">
    <?php
    include 'navbar.php';
    ?>
    <div class="px-3 py-2">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_mhs.php?aksi=tambah" method="post">
    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" >
    </div>
    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" cols="10" rows="3" class="form-control" ></textarea>
    </div>
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </form>
    </div>
</div>