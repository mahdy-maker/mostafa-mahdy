<?php  
if($_POST){
if($_POST['num']>0){
$message="<div class='alert alert-success'>positive</div>";
}
elseif($_POST['num']<0){
    $message="<div class='alert alert-success'>negative</div>";
}
else
{
    $message="<div class='alert alert-success'>not negative,positive</div>";
}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>neg,pos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger h1 mt-5">
                 Detrmine neg,pos number
            </div>
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="form-group">
                      <label for="">The Num:</label>
                      <input type="number" name="num" id="" class="form-control" placeholder="" aria-describedby="helpId"><br>
                    </div>
                      <div class="form-group">
                        <button class="btn btn-outline-danger btn-sm">Check</button>
                    </div>
                </form>
                <?php echo $message ?? ""; ?>
            </div>
        
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
