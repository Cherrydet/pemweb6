<?php 
	include ('conn.php');

	$status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Nama = $_POST['nama'];
      $NPM = $_POST['npm'];
      $TTL = $_POST['ttl'];
      $Alamat = $_POST['alamat'];
      $SD = $_POST['sd'];
      $SMP = $_POST['smp'];
      $SMA = $_POST['sma'];
      $Univ = $_POST['universitas'];
      $Hobby = $_POST['hobby'];
      $Motto = $_POST['motto'];
      //query SQL
      $query = "INSERT INTO bio (Nama, NPM, TTL, Alamat, SD, SMP, SMA, Univ, Hobby, Motto) VALUES('$Nama','$NPM','$TTL','$Alamat','$SD','$SMP','$SMA','$Univ','$Hobby','$Motto')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form - Cherry's Portfolio</title>
  <link rel = "icon" href = "aset/picture/det.jpg" type = "image/x-icon"/>

 	<link rel="stylesheet" href="aset/css/bootstrap.min.css">
 	<link rel="stylesheet" href="aset/css/dashboard.css">
 	
 </head>
 <body>
 
 	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark shadow">
	  <a class="navbar-brand" href="#">
	    <img src="aset/picture/det.jpg" width="40" height="40" alt="LOGO">
	  </a>
	</nav>

	<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "data.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "home.php"; ?>">Home</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 50px 0 30px 0;">Form Data Website</h2>
          <form action="form.php" method="POST">
            
            <div class="form-group">
              <input type="hidden" class="form-control" name="isi_id">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <textarea class="form-control" placeholder="Nama" name="nama" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>NPM</label>
              <textarea class="form-control" placeholder="NPM" name="npm" required="required"></textarea>
            </div>
            <div class="form-group">
              <label>TTL</label>
              <input type="text" class="form-control" placeholder="Tempat, Tanggal Lahir" name="ttl" required="required">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" placeholder="Alamat" name="alamat" required="required">
            </div>
            <div class="form-group">
              <label>SD</label>
              <input type="text" class="form-control" placeholder="SD" name="sd" required="required">
            </div>
            <div class="form-group">
              <label>SMP</label>
              <input type="text" class="form-control" placeholder="SMP" name="smp" required="required">
            </div>
            <div class="form-group">
              <label>SMA</label>
              <input type="text" class="form-control" placeholder="SMA" name="sma" required="required">
            </div>
            <div class="form-group">
              <label>Universitas</label>
              <input type="text" class="form-control" placeholder="Universitas" name="universitas" required="required">
            </div>
            <div class="form-group">
              <label>Hobby</label>
              <input type="text" class="form-control" placeholder="Hobby" name="hobby" required="required">
            </div>
            <div class="form-group">
              <label>Motto</label>
              <input type="text" class="form-control" placeholder="Motto" name="motto" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 20px;">Submit</button>
            
          </form>
        </main>
      </div>
    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

 </body>
 </html>