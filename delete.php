<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['NPM'])) {

          $del = $_GET['NPM'];
          $query = "DELETE FROM bio WHERE NPM = '$del'"; 

          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }

          header('Location: home.php?status='.$status);
      }  
  }