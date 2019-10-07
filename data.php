<?php 
  include ('conn.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Data - Cherry's Portfolio</title>
    <link rel = "icon" href = "aset/picture/det.jpg" type = "image/x-icon"/>
    
    <link href="aset/css/bootstrap.min.css" rel="stylesheet">
    <link href="aset/css/dashboard.css" rel="stylesheet">
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
                <a class="nav-link active" href="<?php echo "data.php"; ?>">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "form.php"; ?>">Tambah Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "home.php"; ?>">Home</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <h2 style="margin: 50px 0 30px 0;">Data Website</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NPM</th>
                  <th>TTL</th>
                  <th>Alamat</th>
                  <th>SD</th>
                  <th>SMP</th>
                  <th>SMA</th>
                  <th>Universitas</th>
                  <th>Hobby</th>
                  <th>Motto</th>
                </tr>
              </thead>
              
              <tbody>
                <?php 
                  $query = "SELECT * FROM bio";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['Nama'];  ?></td>
                    <td><?php echo $data['NPM'];  ?></td>
                    <td><?php echo $data['TTL'];  ?></td>
                    <td><?php echo $data['Alamat'];  ?></td>
                    <td><?php echo $data['SD'];  ?></td>
                    <td><?php echo $data['SMP'];  ?></td>
                    <td><?php echo $data['SMA'];  ?></td>
                    <td><?php echo $data['Univ'];  ?></td>
                    <td><?php echo $data['Hobby'];  ?></td>
                    <td><?php echo $data['Motto'];  ?></td>
                        <td>                      
                          <a href="<?php echo "update.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                          &nbsp;&nbsp;
                          <a href="<?php echo "delete.php?NPM=".$data['NPM']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                        </td>
                 <?php endwhile ?>

              </tbody>
            </table>

          </div>
        </main>
      </div>
    </div>

    <script src="aset/js/jquery.js"></script>
    <script src="aset/js/bootstrap.js"></script>
  </body>
</html>

