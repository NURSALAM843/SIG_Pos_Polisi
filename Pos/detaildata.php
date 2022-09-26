<?php
include "function.php";

$tampiledit = mysqli_query($conn, "SELECT*FROM tbl_pol WHERE id='" . $_POST['idx'] . "'");
$datatampiledit = mysqli_fetch_assoc($tampiledit); ?>

<form method="POST" action="">
    <div class="form-group">
        <label for="nama1">Nama Anggota 1</label>
        <input type="hidden" name="id" class="form-control" value="<?php echo $datatampiledit['id'] ?>" required>
        <input type="text" name="nama1" class="form-control" value="<?php echo mystripslashes($datatampiledit['nama1']) ?>" id="nama1" placeholder="Nama Anggota" required>
    </div>
    <div class="form-group">
        <label for="nama2">Nama Anggota 2</label>
        <input type="text" name="nama2" class="form-control" value="<?php echo mystripslashes($datatampiledit['nama2']) ?>" id="nama2" placeholder="Nama Anggota" required>
    </div>
    <div class="form-group">
        <label for="nama3">Nama POS</label>
        <input type="text" name="nama3" class="form-control" id="nama3" placeholder="Nama Anggota" required value="<?php echo mystripslashes($datatampiledit['nama3']) ?>">
    </div>
    <div class="form-group">
        <label for="lat">Latitude</label>
        <input type="text" name="lat" class="form-control" value="<?php echo $datatampiledit['lat'] ?>" id="lat" placeholder="Posisi Latitude" required>
    </div>
    <div class="form-group">
        <label for="lng">Longitude</label>
        <input type="text" name="lng" class="form-control" value="<?php echo $datatampiledit['lng'] ?>" id="lng" placeholder="Posisi Longitude" required>
    </div>
    <div class="form-group">
        <label for="lokasi">Lokasi POS</label>
        <input type="text" name="lokasi" class="form-control" value="<?php echo mystripslashes($datatampiledit['lokasi']) ?>" id="lokasi" placeholder="Lokasi" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan POS : </label>
        <input type="radio" id="keterangan" name="keterangan" value="Tetap" <?php if ($datatampiledit['keterangan'] == 'Tetap') echo 'checked' ?>>
        <label for="Tetap">Tetap</label>
        <input type="radio" id="keterangan" name="keterangan" value="Sementara" <?php if ($datatampiledit['keterangan'] == 'Sementara') echo 'checked' ?>>
        <label for="Sementara">Sementara</label>
    </div>
    <hr>

    <button type="submit" name="update" class="btn btn-primary">Simpan Update Data</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</form>