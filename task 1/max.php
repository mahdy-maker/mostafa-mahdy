<?php  
if($_GET){
$num1=$_GET['first'];
$num2=$_GET['second'];
$num3=$_GET['third'];

if($num1>$num2 && $num1>$num3 && $num2>$num3){

$message='larger number: '.$num1."<br>".' smallest number: '.$num3;

}
elseif($num1>$num2 && $num1>$num3 && $num2<$num3){

  $message='larger number: '.$num1."<br>".' smallest number: '.$num2;
}

elseif($num2>$num1 && $num2>$num3 && $num1>$num3){

  $message='larger number: '.$num2."<br>".' smallest number: '.$num3;
}
elseif($num2>$num1 && $num2>$num3 && $num1<$num3){

  $message='larger number: '.$num2."<br>".' smallest number: '.$num1;
}

elseif($num3>$num1 && $num3>$num2 && $num1>$num2){

  $message='larger number: '.$num3."<br>".' smallest number: '.$num2;
}
elseif($num3>$num1 && $num3>$num2 && $num1<$num2){

  $message='larger number: '.$num3."<br>".' smallest number: '.$num1;
}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>max,min</title>
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
                 Detrmine max,min value
            </div>
            <div class="col-6 offset-3">
                
                <form action="" method="get">
                    <div class="form-group">
                      <label for="">first num:</label>
                      <input type="number" name="first" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">second num:</label>
                      <input type="number" name="second" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>                   
                    <div class="form-group">
                      <label for="">third num:</label>
                      <input type="number" name="third" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger btn-sm">Result</button>
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
