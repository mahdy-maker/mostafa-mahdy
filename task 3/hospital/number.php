<?php
session_start();
if (!empty($_POST['number'])) {
  $_SESSION['number'] = $_POST['number'];
  header('location:review.php');
  die;
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Number</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body {
      background-image: url("https://tse1.mm.bing.net/th?id=OIP.NMuDEaj0hQPdkfKJ_pctxwHaEL&pid=Api&P=0");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body>
  <form action="" method="post" style="margin-top:400px ;">
    <div class="form-group">
      <h1><span style="color: black;background-color:antiquewhite;"><label for="number">Enter your number:</label></span></h1>
      <input type="text" name="number" id="" class="form-control" placeholder="phone number" aria-describedby="helpId"><br>
      <button type="submit" name="" id="" class="btn btn-primary">submit</button>
    </div>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>