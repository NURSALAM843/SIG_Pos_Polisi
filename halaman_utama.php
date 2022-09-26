<?php
include_once "koneksi.php";
$tampil = mysqli_query($conn, "SELECT*FROM tbl_pol");
//tombol cari di tekan
if (isset($_POST["cari"])) {
  $tampil = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>POS Polisi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="custom.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDTBKmWZKOrhwfSuu7gROSV5oRxwHL_Now"></script>
  <script>
    var marker;

    function initialize() {
      // Variabel untuk menyimpan informasi (desc)
      var infoWindow = new google.maps.InfoWindow;

      //  Variabel untuk menyimpan peta Roadmap
      var mapOptions = {
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }

      // Pembuatan petanya
      var map = new google.maps.Map(document.getElementById('map'), mapOptions);

      // Variabel untuk menyimpan batas kordinat
      var bounds = new google.maps.LatLngBounds();

      // Pengambilan data dari database
      <?php
      $query = mysqli_query($conn, "select * from tbl_pol");
      if (mysqli_num_rows($query) < 1) { ?>
        //peta tanpa marker-2.5446949,118.3207873,5.29z
        var properti_peta = {
          center: new google.maps.LatLng(-2.5446949, 118.3207873),
          zoom: 4,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var peta = new google.maps.Map(document.getElementById("map"), properti_peta);
        //end
      <?php
      } else {
        while ($data = mysqli_fetch_array($query)) {
          //new
          $nama1 = mystripslashesjs($data['nama1']);
          $nama2 = mystripslashesjs($data['nama2']);
          $nama3 = mystripslashesjs($data['nama3']);
          $lokasi = mystripslashesjs($data['lokasi']);
          $keterangan = mystripslashesjs($data['keterangan']);
          //end new
          $lat = $data['lat'];
          $lng = $data['lng'];
          $lokasi = str_replace(array("\r", "\n"), "", $lokasi);
          echo ("addMarker($lat, $lng, '<b>KETERANGAN : </b><br><b>$nama1</b> dan <b>$nama2</b><br><b>$nama3</b><br><b>POS $keterangan</b> <br><br>$lokasi<br>');");
        }
      }
      ?>
      // Proses membuat marker
      function addMarker(lat, lng, info) {
        var lokasi = new google.maps.LatLng(lat, lng);
        bounds.extend(lokasi);
        var marker = new google.maps.Marker({
          map: map,
          position: lokasi,
        });
        map.fitBounds(bounds);
        bindInfoWindow(marker, map, infoWindow, info);
      }
      // Menampilkan informasi pada masing-masing marker yang diklik
      function bindInfoWindow(marker, map, infoWindow, html) {
        google.maps.event.addListener(marker, 'click', function() {
          infoWindow.setContent(html);
          infoWindow.open(map, marker);
        });
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    $(document).ready(function() {
      $('#modal-edit').on('show.bs.modal', function(e) {
        var idx = $(e.relatedTarget).data('id');
        $.ajax({
          type: 'post',
          url: 'detaildata.php',
          data: 'idx=' + idx,
          success: function(data) {
            $('.hasil-data').html(data); //menampilkan data ke dalam modal
          }
        });
      });
    });
  </script>
  <style>
  </style>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">POLRESTA ||<b> PETA POS SATLANTAS</b></a>
        <a class="btn btn-info btn-sm" href="login.php">Login Admin</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="index.php">Home</a></li> -->
          <!-- <li><a href="tentang.php">Tentang</a></li> -->
        </ul>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div id="map" style="height:500px;"></div>
      </div>

      <div class="col-md-12">


        <?php
        if (isset($_POST['update'])) {
          //haha
          $nama1 = myaddslashes($_POST['nama1']);
          $nama2 = myaddslashes($_POST['nama2']);
          $nama3 = myaddslashes($_POST['nama3']);
          $lat = myaddslashes($_POST['lat']);
          $lng = myaddslashes($_POST['lng']);
          $lokasi = myaddslashes($_POST['lokasi']);
          $keterangan = myaddslashes($_POST['keterangan']);
          //haha // scrip d rubah
          mysqli_query($conn, "UPDATE tbl_pol SET nama1='$nama1', nama2='$nama2',nama3='$nama3', lat='$lat', lng='$lng',lokasi='$lokasi', keterangan='$keterangan' WHERE id='" . $_POST['id'] . "'") or die(mysqli_error($data));
          echo "<script>document.location='index.php'</script>";
        } ?>

        <?php
        if (isset($_GET['hapus'])) {
          $id = $_GET['hapus'];
          mysqli_query($conn, "DELETE FROM tbl_pol WHERE id='$id'");
          echo "<script>document.location='index.php'</script>";
        } ?>

        <div class="panel panel-info">
          <div class="panel-heading">
            <h2><i class="fa fa-map-marker"></i> Tabel Lokasi</h2>
            <!-- input group searching -->
            <form action="" method="POST">
              <div class="col-lg-3">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Pencarian..." name="keyword" autofocus autocomplete="off">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="cari">Cari</button>
                  </span>
                </div>
                <!-- /input-group -->
              </div>
            </form>
            <h5><a class="btn btn-primary" data-target='#modal-add' data-toggle='modal'>Tambah Data</a></h5>
          </div>
          <!-- searching disini nnti  -->


          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Anggota </th>
                    <th>Nama POS</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($tampil as $row) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?php echo ($row['nama1']); ?> <br> <?php echo ($row['nama2']); ?></td>
                      <td><?php echo ($row['nama3']); ?></td>
                      <td><?php echo ($row['lokasi']); ?></td>
                      <td><?php echo ($row['keterangan']); ?></td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div id="modal-edit" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Update Data</h4>
              </div>
              <div class="modal-body">
                <div class="hasil-data"></div>

              </div>
            </div>

          </div>
        </div>


        <div id="modal-add" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Data</h4>
              </div>
              <div class="modal-body">
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="nama1">Nama Anggota 1</label>
                    <input type="text" name="nama1" class="form-control" id="nama1" placeholder="Nama Anggota" required>
                  </div>
                  <div class="form-group">
                    <label for="nama2">Nama Anggota 2</label>
                    <input type="text" name="nama2" class="form-control" id="nama2" placeholder="Nama Anggota" required>
                  </div>
                  <div class="form-group">
                    <label for="nama3">Nama POS</label>
                    <input type="text" name="nama3" class="form-control" id="nama3" placeholder="Nama Pos" required>
                  </div>
                  <div class="form-group">
                    <label for="lat">Latitude</label>
                    <input type="text" name="lat" class="form-control" id="lat" placeholder="Posisi Latitude" required>
                  </div>
                  <div class="form-group">
                    <label for="lng">Longitude</label>
                    <input type="text" name="lng" class="form-control" id="lng" placeholder="Posisi Longitude" required>
                  </div>
                  <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <textarea name="lokasi" class="form-control" id="lokasi" Placeholder="Lokasi" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="keterangan">Keterangan POS : </label>
                    <input type="radio" id="keterangan" name="keterangan" value="Tetap">
                    <label for="Tetap">Tetap</label>
                    <input type="radio" id="keterangan" name="keterangan" value="Sementara">
                    <label for="Sementara">Sementara</label>
                  </div>
                  <hr>
                  <button type="submit" name="save" class="btn btn-primary">Simpan Data</button>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>