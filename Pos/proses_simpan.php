<?php
include "function.php";
$nama1 = myaddslashes($_POST['nama1']);
$nama2 = myaddslashes($_POST['nama2']);
$nama3 = myaddslashes($_POST['nama3']);
$lat = myaddslashes($_POST['lat']);
$lng = myaddslashes($_POST['lng']);
$lokasi = myaddslashes($_POST['lokasi']);
$keterangan = myaddslashes($_POST['keterangan']);
$save = mysqli_query($conn, "INSERT INTO tbl_pol VALUES ('','$nama1','$nama2','$nama3','$lat','$lng','$lokasi','$keterangan')");
if ($save) {
    echo "<p class='alert alert-success'>Data Berhasil Di Simpan</p>";
    header("location: index.php");
} else {
    echo "<p class='alert alert-danger'>Data Gagal Di Simpan</p>";
    header("location: index.php");
}
