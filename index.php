<?php
session_start();
$pesan = isset($_SESSION['error']) ? $_SESSION['error'] : NULL;
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>20.230.0007-ASYIFA RIFTA NUR H</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/9.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Login</h2>
      <?php if($pesan !== NULL || $pesan != '') { ?>
      <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error : </strong> <?= $pesan; ?>
      </div>
      <?php } ?>
      <p>Silahkan masukkan Username dan Password:</p>
      <form action="controllers/login.php" method="post">
        <div class="form-group">
          <label for="usr">Name:</label>
          <input type="text" class="form-control" id="usr" name="usr" />
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" name="pwd" />
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </body>
</html>