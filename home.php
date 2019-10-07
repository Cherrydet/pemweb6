<?php 
  include ('conn.php'); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Home - Cherry's Portfolio</title>
    <link rel = "icon" href = "aset/picture/det.jpg" type = "image/x-icon"/>
    <link href="aset/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body{
			background-color: #294c60;
			color :white;
		}
		.navbar{
        	background-color: rgba(0,0,0,0.4) !important;
      	}
      	.navbar-nav a{
      		color:white !important;
      	}
      	.jumbotron{
      		background-image: url(aset/picture/wall.png) !important;
      		height: 300px;
      	}
      	.bio table{
      		margin-top: 50px;
      		width:100%; 
      		border: 1px solid #e8a87c; 
      		border-collapse: collapse; 
      		border-spacing: 10px;
      	}
      	.bio table tr td{
      		padding: 15px; 
      		border: 1px solid #e8a87c; 
      		border-collapse: collapse; 
      		border-spacing: 10px;
      	}
      	.gallery h2{
      		margin-bottom: 35px;
      		margin-left: 50px;
      		font-size: 30pt;
      	}
      	.gallery img{
      		margin-left: 50px;
      		width: 200px;
      	}
      	.portfolio{
      		width: 100%;
      		text-align: center; 
      		padding-bottom: 20px;
      	}
      	.portfolio h1{
      		text-align: left; 
      		margin-left: 130px; 
      		font-size: 50px; 
      		padding-top: 20px; 
      		color: white;
      	}
      	.portfolio img{
      		width: 135px; 
      		margin-right: 10px;"
      	}
      	.portfolio-1{
      		width: 100%;
      		text-align: center; 
      		padding-bottom: 20px;
      	}
      	.portfolio-1 img{
      		width: 170px; 
      		margin-right: 10px;"
      	}
    </style>
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
      <img src="aset/picture/det.jpg" width="40" height="40" alt="LOGO"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo "form.php"; ?>">Form</a>
	      </li>
	    </ul>
	  </div>
	</nav>


	<div class="jumbotron jumbotron-fluid">
	  <div class="container text-center">
	    <h1 class="display-4">Hello!</h1>
	    <p class="lead">Welcome to My Website</p>
	  </div>
	</div>



	<div class="container">
		<div class="row">
			<div class="col-8">
				<div class="bio">

				<h1>About Me.</h1>			
					<?php 
	                  $query = "SELECT * FROM bio";
	                  $result = mysqli_query(connection(),$query);
	                 ?>

	                <?php while($data = mysqli_fetch_array($result)): ?>

	                	<table>
	                		<tr>
	                			<td>Nama</td>
	                			<td><?php echo $data['Nama'];  ?></td>
	                		</tr>
	                		<tr>
	                			<td>NPM</td>
	                			<td><?php echo $data['NPM'];  ?></td>
	                		</tr>
	                		<tr>
	                			<td>TTL</td>
	                			<td><?php echo $data['TTL'];  ?></td>
	                		</tr>
	                		<tr>
	                			<td>Alamat</td>
	                			<td><?php echo $data['Alamat'];  ?></td>
	                		</tr>
	                		<tr>
	                			<td>Pendidikan</td>
	                			<td>
	                				<li><?php echo $data['SD'];  ?></li>
	                				<li><?php echo $data['SMP'];  ?></li>
	                				<li><?php echo $data['SMA'];  ?></li>
	                				<li><?php echo $data['Univ'];  ?></li>
	                			</td>
	                		</tr>
	                		<tr>
	                			<td>Hobby</td>
	                			<td><?php echo $data['Hobby'];  ?></td>
	                		</tr>
	                		<tr>
	                			<td>Motto</td>
	                			<td><?php echo $data['Motto'];  ?></td>
	                		</tr>
	                	</table>

	                <?php endwhile ?>
				</div>	
			</div>

			<div class="col-4">
				<div class="gallery">
					<h2>My Gallery.</h2>
					<img src="aset/picture/me1.jpg"><br><br>
					<img src="aset/picture/me4.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class="container">
      <div class="row">
        <div class="portfolio">
          <h1>Portfolio.</h1><br>
                <img src="aset/picture/port2.jpg" alt="Gambar Tidak Tersedia">
                <img src="aset/picture/port5.jpg" alt="Gambar Tidak Tersedia">
                <img src="aset/picture/port6.jpg" alt="Gambar Tidak Tersedia">
                <img src="aset/picture/port8.jpg" alt="Gambar Tidak Tersedia">
        </div>
      </div>

      <div class="row">
      	<div class="portfolio-1">
      		<img src="aset/picture/port18.jpg" alt="Gambar Tidak Tersedia">
            <img src="aset/picture/port10.jpg" alt="Gambar Tidak Tersedia">
            <img src="aset/picture/port16.jpg" alt="Gambar Tidak Tersedia">
            <img src="aset/picture/port17.jpg" alt="Gambar Tidak Tersedia">
            <img src="aset/picture/port12.jpg" alt="Gambar Tidak Tersedia">
      	</div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="contact" style="padding-bottom: 10px; width: 1360px; height: 300px;">
          <h1 style="text-align: left; margin-left: 130px; font-size: 50px; padding-top: 20px; color: white;">Contact Me.</h1><br>
            <table style="width:75%; text-align: center; margin-left: 170px; padding: 15px; border: 3px solid #22577A; border-collapse: collapse; border-spacing: 10px; color:white;">
                  <tr style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;">
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;"><img src="aset/picture/telp.png" alt="Gambar Tidak Ada" style="width: 40px;">  <img src="aset/picture/wa.png" alt="Gambar Tidak Ada" style="width: 40px;"></td>
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;">082323468491</td>
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;"><img src="aset/picture/gmail.png" alt="Gambar Tidak Ada" style="width: 40px;"></td>
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;">cherrydaniella10@gmail.com</td> 
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;"><img src="aset/picture/line.png" alt="Gambar Tidak Ada" style="width: 40px;"></td>
                    <td style="padding: 15px; border: 3px solid #e8a87c; border-collapse: collapse; border-spacing: 10px;">cherrydaniella</td> 
                  </tr>
            </table><br><br>

          <div class="sosmed" style="text-align: center; margin-left: 160px; margin-bottom: 10px;">
            <a style="margin-right: 150px;" href="https://www.facebook.com/cherry.naghspenpatda"><img src="aset/picture/fb.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
            <a style="margin-right: 150px;" href="https://www.instagram.com/cherry_det/"><img src="aset/picture/ig.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
            <a style="margin-right: 150px;" href="https://twitter.com/daniella_cr"><img src="aset/picture/twit.png" alt="Gambar Tidak Ada" style="width: 50px;"></a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>